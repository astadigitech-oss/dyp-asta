@extends('layouts.layout')

@section('title', 'Insights - PT Dian Yogya Perdana')
@section('description', 'Latest news and articles from PT Dian Yogya Perdana about recruitment, training and overseas placement.')

@section('content')
    <section class="py-12"
        style="background-image: url('{{ asset('storage/bases/bg1.webp') }}');
       background-repeat: repeat;
       background-size: auto;">

        <div class="container mx-auto px-6 py-12">

            {{-- Header --}}
            <div class="max-w-3xl mx-auto text-center mb-12">

                <span class="uppercase tracking-[5px] text-xs sm:text-sm text-gray-500">
                    Latest News
                </span>

                <h1 class="mt-3 text-3xl sm:text-4xl lg:text-5xl font-bold text-[#08145A]">
                    Insights
                </h1>

                <p class="mt-5 text-sm sm:text-base leading-7 text-gray-600">
                    Stay updated with our latest company activities, recruitment programs,
                    international partnerships, and overseas placement documentation.
                </p>

            </div>

            {{-- Categories --}}
            @php
                $chipActive = 'inline-flex items-center gap-2 rounded-full bg-[#21479A] px-5 py-2.5 text-sm font-medium text-white';
                $chipIdle = 'inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-700 transition hover:border-[#21479A] hover:text-[#21479A]';
                $countActive = 'rounded-full bg-white px-2.5 py-0.5 text-xs font-semibold text-[#21479A]';
                $countIdle = 'rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-semibold';
            @endphp

            <div id="categories" class="flex flex-wrap justify-center gap-3 mb-14 scroll-mt-6">

                <a href="{{ route('insight.index') }}#categories" class="{{ $activeCategory ? $chipIdle : $chipActive }}">
                    All
                    <span class="{{ $activeCategory ? $countIdle : $countActive }}">{{ $total }}</span>
                </a>

                @foreach ($categories as $category)
                    @php($isActive = $activeCategory === $category['slug'])
                    <a href="{{ route('insight.index', ['category' => $category['slug']]) }}#categories"
                        class="{{ $isActive ? $chipActive : $chipIdle }}">
                        {{ $category['name'] }}
                        <span class="{{ $isActive ? $countActive : $countIdle }}">{{ $category['count'] }}</span>
                    </a>
                @endforeach

            </div>

            {{-- Articles --}}
            @if (empty($insights))
                <div class="max-w-xl mx-auto text-center rounded-3xl bg-white/80 p-10 text-gray-600">
                    Tidak ada artikel yang ditemukan.
                    <a href="{{ route('insight.index') }}" class="font-semibold text-[#21479A] hover:underline">Lihat semua
                        artikel</a>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

                    @foreach ($insights as $insight)
                        <a href="{{ route('insight.show', $insight['slug']) }}"
                            class="group overflow-hidden rounded-3xl bg-white shadow-lg transition duration-300 hover:-translate-y-2 hover:shadow-xl">

                            {{-- Image --}}
                            <div class="overflow-hidden">
                                <img loading="lazy" decoding="async" src="{{ $insight['image'] }}"
                                    alt="{{ $insight['name'] }}"
                                    class="h-56 sm:h-60 w-full object-cover transition duration-500 group-hover:scale-110">
                            </div>

                            {{-- Content --}}
                            <div class="p-6">

                                <div class="mb-4 flex items-center justify-between gap-3">
                                    <span
                                        class="rounded-full bg-[#21479A]/10 px-3 py-1 text-xs font-semibold text-[#21479A]">
                                        {{ $insight['category'] }}
                                    </span>
                                    <span class="text-sm text-gray-500">
                                        {{ \Carbon\Carbon::parse($insight['date'])->format('d M Y') }}
                                    </span>
                                </div>

                                <h2
                                    class="mb-4 text-xl sm:text-2xl font-bold leading-snug text-[#08145A] transition group-hover:text-[#21479A]">
                                    {{ $insight['name'] }}
                                </h2>

                                <p class="mb-6 text-sm sm:text-base leading-7 text-gray-600">
                                    {{ $insight['excerpt'] }}
                                </p>

                                <span class="inline-flex items-center gap-2 font-semibold text-[#21479A]">
                                    Read Article
                                    <i class="fa-solid fa-arrow-right text-sm transition group-hover:translate-x-1"></i>
                                </span>

                            </div>

                        </a>
                    @endforeach

                </div>
            @endif

            {{-- Pagination --}}
            <x-pagination :pagination="$pagination" :params="['category' => $activeCategory]" fragment="categories" />

        </div>
    </section>
@endsection
