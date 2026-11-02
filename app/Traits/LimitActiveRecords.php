<?php

namespace App\Traits; // Perbaikan typo: Umumnya 'Traits' (jamak)

use Illuminate\Database\Eloquent\Model;

trait LimitActiveRecords
{
    /**
     * Ambil jumlah maksimal aktif.
     * Bisa dioverride di model dengan properti atau method maxActive()
     */
    protected function getMaxActive(): int
    {
        if (method_exists($this, 'maxActive')) {
            return $this->maxActive();
        }

        // Opsional: bisa juga cek lewat properti $maxActive di model
        return $this->maxActive ?? 1;
    }

    public static function bootLimitActiveRecords()
    {
        // Gunakan 'saving' jika ingin mengubah state model yang sedang disimpan sebelum masuk DB
        static::saving(function (Model $model) {
            if ($model->is_active) {
                // Panggil method via instance model
                $maxActive = $model->getMaxActive();

                // Hitung record aktif lain (exclude diri sendiri jika sedang diupdate)
                $activeCount = $model->newQuery()
                    ->where('is_active', true)
                    ->where('id', '!=', $model->id)
                    ->count();

                // Jika batas maksimal terlampaui
                if ($activeCount >= $maxActive) {
                    // Berapa banyak record lama yang harus dinonaktifkan?
                    $limitToDeactivate = $activeCount - $maxActive + 1;

                    // Ambil ID record yang paling lama aktif untuk dinonaktifkan
                    $oldestActiveIds = $model->newQuery()
                        ->where('is_active', true)
                        ->where('id', '!=', $model->id)
                        ->orderBy('created_at', 'asc') // Paling lama di atas
                        ->limit($limitToDeactivate)
                        ->pluck('id');

                    if ($oldestActiveIds->isNotEmpty()) {
                        // Gunakan mass update via query builder agar tidak memicu event saving kembali (mencegah infinite loop)
                        $model->newQuery()
                            ->whereIn('id', $oldestActiveIds)
                            ->update(['is_active' => false]);
                    }
                }
            }
        });
    }
}
