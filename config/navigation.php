<?php

return [

    'menus' => [
        ['label' => 'Beranda', 'icon' => 'house', 'href' => '/'],
        [
            'label' => 'About Us',
            'icon' => 'briefcase',
            'href' => '#',
            'dropdown' => true,
            'children' => [
                ['label' => 'About Us', 'href' => '/about/about'],
                ['label' => 'Company Profile', 'href' => '/about/profile'],
                ['label' => 'Legality', 'href' => '/about/legality'],
                ['label' => 'Award & Certified', 'href' => '/about/awards'],
            ],
        ],
        ['label' => 'Services', 'icon' => 'rocket', 'href' => '/services'],
        ['label' => 'Insights', 'icon' => 'eye', 'href' => '/insights'],
        ['label' => 'Contact', 'icon' => 'phone', 'href' => '/contact'],
    ],

    // Ikon sosial media hanya tampil jika URL-nya diisi di .env
    'social' => [
        'linkedin' => env('COMPANY_LINKEDIN_URL'),
    ],

];
