<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PT Dian Yogya Perdana')</title>

    {{-- SEO & preview link (WhatsApp, Facebook, LinkedIn). Halaman bisa mengganti lewat @section --}}
    @php($metaDescription = trim($__env->yieldContent('description', 'PT Dian Yogya Perdana is a licensed Indonesian employment agency in Yogyakarta, recruiting skilled workers for overseas placement since 2004. Fast, appropriate, safe and transparent.')))
    {{-- isi @section sebaris sudah di-escape Blade, jadi dicetak tanpa escape ulang --}}
    <meta name="description" content="{!! $metaDescription !!}">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="PT Dian Yogya Perdana">
    <meta property="og:title" content="@yield('title', 'PT Dian Yogya Perdana')">
    <meta property="og:description" content="{!! $metaDescription !!}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('storage/bases/og-image.jpg'))">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" href="{{ asset('favicon-32.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <meta name="theme-color" content="#01093F">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>

<body class="@yield('body_class', 'bg-white')">

    <!-- HERO -->
    <section class="relative overflow-hidden @yield('hero_class', 'min-h-3/4')">
        <!-- Background -->
        <div class="absolute inset-0">
            <img src="{{ asset('storage/bases/Hero.webp') }}" alt="" fetchpriority="high" class="w-full h-full object-cover">
            <div class="absolute inset-0 @yield('hero_overlay', 'bg-black/70')"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10" x-data="{ mobileOpen: false }" @keydown.escape.window="mobileOpen = false">
            <!-- TOP BAR -->
            <div class="container mx-auto px-6 py-6">
                <div class="flex flex-row justify-between items-center gap-4">
                    <!-- Logo -->
                    <a href="/" class="flex items-center gap-3">
                        <img src="{{ asset('storage/bases/logoSingle.webp') }}" class="w-12 h-12 sm:w-14 sm:h-14"
                            alt="Logo PT Dian Yogya Perdana">
                        <div>
                            <h2 class="text-white font-bold text-base sm:text-lg">
                                PT DIAN YOGYA PERDANA
                            </h2>
                            <p class="text-gray-300 text-sm">
                                Employment Agency
                            </p>
                        </div>
                    </a>

                    <!-- Contact Desktop Only -->
                    <div class="hidden lg:flex gap-8 text-white">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-phone text-xl"></i>
                            <span>(+62) 856-0200-1555</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-map-location-dot text-xl"></i>
                            <span>
                                Jl. Ringroad Selatan No. 1
                                <br>
                                Glugo, D.I. Yogyakarta
                            </span>
                        </div>
                    </div>

                    <!-- Burger Mobile Only -->
                    <button type="button" @click.stop="mobileOpen = !mobileOpen" :aria-expanded="mobileOpen"
                        aria-label="Buka menu" class="lg:hidden text-white text-2xl w-10 h-10 shrink-0 cursor-pointer">
                        <i class="fa-solid" :class="mobileOpen ? 'fa-xmark' : 'fa-bars'"></i>
                    </button>
                </div>
            </div>

            <x-mobile-menu />

            <!-- NAVBAR -->
            <div class="flex justify-center mt-6">
                <x-navbar />
            </div>

            <!-- HERO CONTENT -->
            @hasSection('hero')
                @yield('hero')
            @else
                <div class="container mx-auto px-6 flex items-center justify-center min-h-[50vh]">
                    <div class="text-center space-y-5 max-w-5xl">
                        <h1 class="text-white font-bold leading-tight text-2xl sm:text-3xl md:text-4xl lg:text-6xl">
                            PT. Dian Yogya Perdana
                        </h1>
                        <h2 class="text-white font-bold leading-tight text-xl sm:text-2xl md:text-2xl lg:text-3xl">
                            Fast, Appropriate, Safe and Transparent
                        </h2>
                    </div>
                </div>
            @endif
        </div>
    </section>

    @yield('content')

    <x-footer />

    @stack('scripts')
</body>

</html>
