<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Services\ApiService;

class HomeController extends Controller
{
    public function __construct(
        protected ApiService $api
    ) {}

    public function getDataHome()
    {
        // Empat endpoint diambil paralel (dan di-cache) lewat getMany
        $data = $this->api->getMany([
            '/home/branches',
            '/home/latest-insights',
            '/home/client-logos',
            '/home/testimonials',
        ]);

        $branches = $data['/home/branches']['data'];

        $latestInsights = $data['/home/latest-insights']['data'];

        $clientLogos = $data['/home/client-logos']['data'];

        $testimonials = $data['/home/testimonials']['data'];

        return view('mains.home.index', compact(
            'branches',
            'latestInsights',
            'clientLogos',
            'testimonials'
        ));
    }
}
