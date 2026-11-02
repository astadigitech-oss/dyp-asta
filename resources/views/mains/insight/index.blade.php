@extends('layouts.layout')
@section('title', 'Insights - PT Dian Yogya Perdana')
@section('description', 'News, updates and photo galleries about recruitment, training and departure activities at PT Dian Yogya Perdana.')

@section('content')
    <section class="pb-16"
        style="background-image: url('{{ asset('storage/bases/bg1.webp') }}');
       background-repeat: repeat;
       background-size: auto;">

        {{-- ===================== INSIGHTS ===================== --}}
        <div class="container mx-auto px-6 py-12">

            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between mb-12">

                <div>

                    <span class="uppercase tracking-[5px] text-xs sm:text-sm text-gray-500">
                        Latest News
                    </span>

                    <h2 class="mt-2 text-3xl sm:text-4xl lg:text-5xl font-bold text-[#08145A]">
                        Insights
                    </h2>

                    <p class="mt-4 max-w-2xl text-sm sm:text-base leading-7 text-gray-600">
                        Stay updated with our latest company activities,
                        recruitment programs, and international partnerships.
                    </p>

                </div>

                <a href="{{ route('insight.index') }}"
                    class="inline-flex w-fit items-center gap-2 rounded-full bg-[#21479A] px-6 py-2.5 text-sm sm:text-base font-semibold text-white transition hover:bg-[#19387d]">

                    View All

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>

            <div class="hidden lg:grid lg:grid-cols-3 gap-8">

                @foreach ($latestInsights as $insight)
                    <article
                        class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-2 transition duration-300 flex flex-col">

                        <div class="overflow-hidden">
                            <img loading="lazy" decoding="async" src="{{ $insight['image'] }}"
                                class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">
                        </div>

                        <div class="p-7 flex flex-col flex-1">

                            <span
                                class="inline-flex w-fit px-3 py-1 rounded-full bg-blue-50 text-[#00145E] text-xs font-semibold">
                                {{ $insight['category'] }}
                            </span>

                            <h3 class="mt-4 text-2xl font-bold text-[#00145E] line-clamp-2">
                                {{ $insight['name'] }}
                            </h3>

                            <p class="mt-3 text-gray-600 line-clamp-3">
                                {{ $insight['description'] }}
                            </p>

                            <div class="flex items-center justify-between mt-auto pt-8">

                                <p class="text-sm text-gray-400">
                                    {{ $insight['date'] }}
                                </p>

                                <a href="{{ route('insight.show', $insight['slug']) }}" class="flex items-center gap-2 font-semibold text-[#00145E]">
                                    Read More
                                    <i data-lucide="arrow-right" class="w-4 h-4 transition group-hover:translate-x-1"></i>
                                </a>

                            </div>

                        </div>

                    </article>
                @endforeach

            </div>

        </div>

        {{-- ===================== GALLERY ===================== --}}
        <div class="container mx-auto px-6 py-12">

            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between mb-12">

                <div>

                    <span class="uppercase tracking-[5px] text-xs sm:text-sm text-gray-500">
                        Documentation
                    </span>

                    <h2 class="mt-2 text-3xl sm:text-4xl lg:text-5xl font-bold text-[#08145A]">
                        Gallery
                    </h2>

                    <p class="mt-4 max-w-2xl text-sm sm:text-base leading-7 text-gray-600">
                        Explore our activities, recruitment process, training sessions,
                        and company events through our latest documentation.
                    </p>

                </div>

                <a href="{{ route('gallery.index') }}"
                    class="inline-flex w-fit items-center gap-2 rounded-full bg-[#21479A] px-6 py-2.5 text-sm sm:text-base font-semibold text-white transition hover:bg-[#19387d]">

                    View All

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>

            <section id="gallery-slider" class="splide">

                <div class="splide__track">

                    <ul class="splide__list">

                        @foreach ($latestGalleries as $gallery)
                            <li class="splide__slide">

                                <a href="{{ route('gallery.show', $gallery['slug']) }}" class="group block">

                                    <div class="relative overflow-hidden rounded-3xl">

                                        <img loading="lazy" decoding="async" src="{{ $gallery['image'] }}"
                                            class="h-[260px] sm:h-[360px] lg:h-[520px] w-full object-cover transition duration-500 group-hover:scale-110">

                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent">
                                        </div>

                                        <div class="absolute inset-x-0 bottom-0 p-5 sm:p-8">

                                            <span
                                                class="mb-3 inline-block rounded-full bg-white/20 px-4 py-1 text-xs sm:text-sm text-white backdrop-blur">

                                                {{ $gallery['date'] }}

                                            </span>

                                            <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-white">

                                                {{ $gallery['name'] }}

                                            </h3>

                                        </div>

                                    </div>

                                </a>

                            </li>
                        @endforeach

                    </ul>

                </div>

            </section>

        </div>

    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function() {

            new Splide('#gallery-slider', {
                type: 'loop',
                perPage: 3,
                gap: '1.5rem',
                autoplay: true,
                interval: 3500,
                pauseOnHover: true,
                arrows: true,
                pagination: false,

                breakpoints: {

                    1280: {
                        perPage: 3,
                    },

                    1024: {
                        perPage: 2,
                    },

                    768: {
                        perPage: 2,
                        gap: '1rem',
                    },

                    640: {
                        perPage: 1,
                        gap: '.75rem',
                    }

                }

            }).mount();

        });
    </script>
@endsection
