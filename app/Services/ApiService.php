<?php

namespace App\Services;

use Illuminate\Http\Client\Pool;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ApiService
{
    /** Hasil yang dipakai saat API gagal dan belum ada salinan lama */
    protected const EMPTY = ['data' => []];

    public function get(string $endpoint): array
    {
        return $this->getMany([$endpoint])[$endpoint];
    }

    /**
     * Ambil beberapa endpoint sekaligus. Yang belum ada di cache diminta paralel.
     *
     * Jika API gagal, dipakai salinan terakhir yang berhasil (stale),
     * atau ['data' => []] kalau belum pernah berhasil, supaya halaman tetap tampil.
     */
    public function getMany(array $endpoints): array
    {
        $results = [];
        $missing = [];

        foreach ($endpoints as $endpoint) {
            $cached = Cache::get($this->cacheKey($endpoint));

            if ($cached !== null) {
                $results[$endpoint] = $cached;
            } else {
                $missing[] = $endpoint;
            }
        }

        if ($missing) {
            $responses = Http::pool(fn (Pool $pool) => array_map(
                fn ($endpoint) => $this->poolRequest($pool, $endpoint),
                $missing
            ));

            foreach ($missing as $endpoint) {
                $results[$endpoint] = $this->handleResponse($endpoint, $responses[$endpoint] ?? null);
            }
        }

        return $results;
    }

    protected function poolRequest(Pool $pool, string $endpoint)
    {
        return $pool->as($endpoint)
            ->withToken(config('services.admin_api.token'))
            ->acceptJson()
            ->connectTimeout(3)
            ->timeout(config('services.admin_api.timeout'))
            ->get(config('services.admin_api.url') . $endpoint);
    }

    protected function handleResponse(string $endpoint, mixed $response): array
    {
        if ($response instanceof Response && $response->successful() && is_array($response->json('data'))) {
            $json = $response->json();

            Cache::put($this->cacheKey($endpoint), $json, config('services.admin_api.cache_ttl'));
            Cache::forever($this->cacheKey($endpoint, 'stale'), $json);

            return $json;
        }

        Log::warning('Admin API gagal', [
            'endpoint' => $endpoint,
            'status' => $response instanceof Response ? $response->status() : null,
            'error' => $response instanceof \Throwable ? $response->getMessage() : null,
        ]);

        // 404 berarti datanya memang tidak ada, jangan pakai salinan lama
        if ($response instanceof Response && $response->notFound()) {
            return self::EMPTY;
        }

        return Cache::get($this->cacheKey($endpoint, 'stale'), self::EMPTY);
    }

    protected function cacheKey(string $endpoint, string $type = 'fresh'): string
    {
        return "admin_api:{$type}:" . md5($endpoint);
    }
}
