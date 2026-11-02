@extends('layouts.layout')

@section('title', 'Gallery - PT Dian Yogya Perdana')
@section('description', 'Photo documentation of activities, training and departures at PT Dian Yogya Perdana.')

@section('content')
    <section class="relative"
        style="background-image: url('{{ asset('storage/bases/bg1.webp') }}');
           background-repeat: repeat;
           background-size: auto;">

        <!-- Background Tint Overlay -->
        {{-- <div class="absolute inset-0 w-full h-full bg-blue-950/20 z-0"></div> --}}

        <div class="relative z-10 container mx-auto px-6 py-12">

            <!-- Header Section -->
            <div class="max-w-2xl mx-auto text-center mb-12 space-y-3">
                <h1 class="text-3xl sm:text-4xl font-bold text-slate-900">
                    Gallery & Activities
                </h1>
                <p class="text-slate-600 text-sm sm:text-base">
                    Kumpulan dokumentasi kegiatan, pelatihan, dan momen penting dalam perjalanan layanan operasional kami.
                </p>
            </div>

            <!-- Gallery Grid Section (Bisa diklik ke Show) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @foreach ($galleries as $gallery)
                    <a href="{{ route('gallery.show', $gallery['slug']) }}"
                        class="group relative h-80 sm:h-96 rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 border border-white/40 block">

                        <!-- Background Image (Zoom effect) -->
                        <img loading="lazy" decoding="async" src="{{ $gallery['image'] }}" alt="{{ $gallery['name'] }}"
                            class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-out" />

                        <!-- Gradient Overlay (Bikin Teks Mudah Dibaca) -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/30 to-transparent opacity-80 group-hover:opacity-95 transition-opacity duration-300">
                        </div>

                        <!-- Top Badge: Date / Photo Count -->
                        <div class="absolute top-4 left-4 right-4 flex items-center justify-between z-10">
                            <span
                                class="px-3 py-1 text-xs font-medium text-white bg-slate-900/60 backdrop-blur-md rounded-full border border-white/10">
                                {{ \Carbon\Carbon::parse($gallery['date'])->format('d M Y') }}
                            </span>

                            @if (isset($gallery['photo_count']))
                                <span
                                    class="inline-flex items-center gap-1 px-2.5 py-1 text-xs font-medium text-white bg-blue-600/80 backdrop-blur-md rounded-full">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    {{ $gallery['photo_count'] }}
                                </span>
                            @endif
                        </div>

                        <!-- Bottom Content Info -->
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 z-10 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                            <h3
                                class="text-lg sm:text-xl font-bold text-white leading-snug line-clamp-2 group-hover:text-blue-200 transition-colors">
                                {{ $gallery['name'] }}
                            </h3>

                            <!-- Hover CTA Label -->
                            <div
                                class="flex items-center gap-2 mt-3 text-xs font-semibold text-blue-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <span>Lihat Album Foto</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                        </div>

                    </a>
                @endforeach
            </div>

            @if (empty($galleries))
                <div class="max-w-xl mx-auto text-center rounded-3xl bg-white/80 p-10 text-gray-600">
                    Belum ada album dokumentasi.
                </div>
            @endif

            <x-pagination :pagination="$pagination" />

        </div>
    </section>
@endsection
