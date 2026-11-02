@extends('layouts.layout')
@section('title', $service['name'] . ' - PT Dian Yogya Perdana')
@section('description', Str::limit(strip_tags($service['description'] ?? ''), 155))

@section('content')
    <section class="py-12">
        <div class="container mx-auto px-6">

            <div class="mb-8 flex flex-col-reverse gap-4 sm:flex-row sm:items-center sm:justify-between">

                {{-- Breadcrumb --}}
                <div class="text-sm text-gray-500 break-words">
                    Home /
                    Services /
                    <span class="font-semibold text-[#08145A]">
                        {{ $service['name'] }}
                    </span>
                </div>

                {{-- Back Button --}}
                <a href="{{ route('services') }}"
                    class="inline-flex w-fit items-center gap-2 rounded-lg border border-[#08145A] px-4 py-2 text-sm sm:px-5 sm:py-2.5 sm:text-base font-medium text-[#08145A] transition hover:bg-[#08145A] hover:text-white">

                    <i class="fa-solid fa-arrow-left"></i>

                    <span>Back to Services</span>

                </a>

            </div>

            {{-- Heading --}}
            <div class="max-w-4xl mb-10">
                <h1 class="text-5xl font-bold text-[#08145A] mb-5">
                    {{ $service['name'] }}
                </h1>

            </div>

            {{-- Slider --}}
            <section id="service-slider" class="splide mb-12">
                <div class="splide__track">

                    <ul class="splide__list">

                        @foreach ($service['service_objects'] as $image)
                            <li class="splide__slide">
                                <img loading="lazy" decoding="async" src="{{ $image['image'] }}" class="w-full h-[550px] object-cover rounded-2xl">
                            </li>
                        @endforeach

                    </ul>

                </div>
            </section>

            {{-- Description --}}
            <div class="max-w-5xl mx-auto">

                <h2 class="text-3xl font-bold text-[#08145A] mb-6">
                    About This Service
                </h2>

                <div class="space-y-6 text-gray-700 leading-8">

                    <p>
                        {{ $service['description'] }}
                    </p>

                </div>

            </div>

        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            new Splide('#service-slider', {
                type: 'loop',
                perPage: 1,
                gap: '1rem',
                autoplay: true,
                interval: 3500,
                pauseOnHover: true,
                arrows: true,
                pagination: true,
                cover: true,
                heightRatio: 0.5,
            }).mount();

        });
    </script>
@endsection
