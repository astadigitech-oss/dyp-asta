<?php

namespace App\Http\Controllers\Insight;

use App\Http\Controllers\Controller;
use App\Services\ApiService;
use Illuminate\Http\Request;

class InsightController extends Controller
{
    public function __construct(
        protected ApiService $api
    ) {}

    public function getDataInsight()
    {
        $data = $this->api->getMany([
            '/insight/latest-insights',
            '/insight/latest-galleries',
        ]);

        $latestInsights = $data['/insight/latest-insights']['data'];
        $latestGalleries = $data['/insight/latest-galleries']['data'];

        return view('mains.insight.index', compact(
            'latestInsights',
            'latestGalleries'
        ));
    }

    public function insightList(Request $request)
    {
        $category = $request->query('category');
        $page = max(1, (int) $request->query('page', 1));

        $query = http_build_query(array_filter(['category' => $category, 'page' => $page > 1 ? $page : null]));
        $data = $this->api->get('/insight/insights' . ($query ? '?' . $query : ''))['data'];

        return view('mains.insight.insight.index', [
            'insights' => $data['items'] ?? [],
            'categories' => $data['categories'] ?? [],
            'total' => $data['total'] ?? 0,
            'pagination' => $data['pagination'] ?? null,
            'activeCategory' => $category,
        ]);
    }

    public function insightShow($slug)
    {
        $article = $this->api->get('/insight/insights/' . rawurlencode($slug))['data'];

        abort_if(empty($article), 404);

        return view('mains.insight.insight.show', compact('article'));
    }

    public function galleryList(Request $request)
    {
        $page = max(1, (int) $request->query('page', 1));

        $data = $this->api->get('/insight/galleries' . ($page > 1 ? '?page=' . $page : ''))['data'];

        return view('mains.insight.gallery.index', [
            'galleries' => $data['items'] ?? [],
            'pagination' => $data['pagination'] ?? null,
        ]);
    }

    public function galleryShow($slug)
    {
        $gallery = $this->api->get('/insight/galleries/' . rawurlencode($slug))['data'];

        abort_if(empty($gallery), 404);

        return view('mains.insight.gallery.show', compact('gallery'));
    }
}
