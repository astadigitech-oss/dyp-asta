<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Services\ApiService;

class ServiceController extends Controller
{
    public function __construct(
        protected ApiService $api
    ) {}

    public function getDataService()
    {
        $services = $this->api->get('/service')['data'];

        return view('mains.service.index', compact(
            'services'
        ));
    }

    public function showService($slug)
    {
        $service = $this->api->get('/service/' . $slug)['data'];

        abort_if(empty($service), 404);

        return view('mains.service.show', compact(
            'service'
        ));
    }
}
