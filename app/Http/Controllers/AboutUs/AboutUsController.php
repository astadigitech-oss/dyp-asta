<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;
use App\Services\ApiService;

class AboutUsController extends Controller
{
    public function __construct(
        protected ApiService $api
    ) {}

    public function getDataAboutUs()
    {
        $employees = $this->api->get('/about-us/employees')['data'];

        return view('mains.about-us.index', compact(
            'employees'
        ));
    }

    public function getLegality()
    {
        $legalities = $this->api->get('/about-us/legalities')['data'];

        return view('mains.legality.index', compact(
            'legalities'
        ));
    }

    public function getAwards()
    {
        $awards = $this->api->get('/about-us/awards')['data'];

        return view('mains.award.index', compact(
            'awards'
        ));
    }
}
