@extends('layouts.layout')

@section('title', $gallery['name'] . ' - PT Dian Yogya Perdana')
@section('description', 'Photo album: ' . $gallery['name'] . ' - PT Dian Yogya Perdana.')
@section('og_image', $gallery['image'])

@section('content')
    <section class="relative"
        style="background-image: url('{{ asset('storage/bases/bg1.webp') }}');
               background-repeat: repeat;
               background-size: auto;">

        <!-- Dark/Blue Background Overlay -->
        <div class="absolute inset-0 w-full h-full bg-blue-950/20 z-0"></div>

        <div class="relative z-10 container mx-auto px-6 py-12">

            <!-- MAIN ALBUM CARD -->
            <main class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-100 shadow-sm space-y-8">

                <!-- Breadcrumb Nav -->
                <nav class="text-sm text-gray-500 pb-2 border-b border-slate-100">
                    <a href="{{ route('gallery.index') }}" class="hover:text-blue-600 transition">Gallery</a>
                    <span class="mx-2">/</span>
                    <span class="text-gray-800 font-medium truncate">{{ $gallery['name'] }}</span>
                </nav>

                <!-- Album Header & Info -->
                <div class="space-y-4 max-w-3xl">
                    <div class="flex items-center gap-3">
                        <span class="px-3 py-1 text-xs font-semibold text-blue-600 bg-blue-50 rounded-full">
                            Album Dokumentasi
                        </span>
                        <span class="text-xs text-gray-400">•</span>
                        <span class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($gallery['date'])->format('d M Y') }}</span>
                        <span class="text-xs text-gray-400">•</span>
                        <span class="text-xs text-gray-500">{{ count($gallery['photos']) }} Foto</span>
                    </div>

                    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900 leading-tight">
                        {{ $gallery['name'] }}
                    </h1>

                </div>

                <!-- GALLERY PHOTO GRID -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 pt-4">
                    @foreach ($gallery['photos'] as $index => $photo)
                        <button type="button" data-lightbox="{{ $photo }}" aria-label="Perbesar foto {{ $index + 1 }}"
                            class="group relative h-64 sm:h-72 rounded-xl overflow-hidden cursor-pointer border border-slate-100 bg-slate-900 shadow-sm hover:shadow-xl transition-all duration-300">

                            <!-- Image -->
                            <img loading="lazy" decoding="async" src="{{ $photo }}" alt="{{ $gallery['name'] }} - foto {{ $index + 1 }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 opacity-95 group-hover:opacity-100" />

                            <!-- Hover Dark Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4">
                                <span class="text-xs font-medium text-blue-300">Klik untuk memperbesar</span>
                            </div>

                            <!-- Expand Icon (Top Right) -->
                            <div
                                class="absolute top-3 right-3 p-2 bg-slate-900/60 backdrop-blur-md rounded-lg text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 8V4m0 0h4M4 4l5 5m11-2V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                                </svg>
                            </div>
                        </button>
                    @endforeach
                </div>

                <!-- Back Button -->
                <div class="pt-6 border-t border-slate-100">
                    <a href="{{ route('gallery.index') }}"
                        class="inline-flex items-center gap-2 text-sm font-medium text-slate-600 hover:text-blue-600 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Kembali ke Galeri
                    </a>
                </div>

            </main>

        </div>
    </section>

    <!-- LIGHTBOX MODAL (PREVIEW FULLSCREEN) -->
    <div id="lightboxModal" onclick="closeLightbox()"
        class="fixed inset-0 z-50 hidden bg-slate-950/90 backdrop-blur-md flex items-center justify-center p-4 sm:p-8 transition-opacity duration-300">

        <!-- Close Button -->
        <button type="button" onclick="closeLightbox()" aria-label="Tutup"
            class="absolute top-6 right-6 text-white/70 hover:text-white p-2 rounded-full bg-white/10 hover:bg-white/20 transition">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Modal Content Container -->
        <div class="max-w-4xl w-full space-y-3 text-center" onclick="event.stopPropagation()">
            <div class="overflow-hidden rounded-2xl max-h-[80vh] flex items-center justify-center">
                <img id="lightboxImage" src="" alt="Preview Foto"
                    class="max-h-[75vh] w-auto max-w-full object-contain rounded-xl shadow-2xl" />
            </div>
            <p id="lightboxCaption" class="text-white/90 text-sm sm:text-base font-medium pt-2"></p>
        </div>
    </div>

    <!-- Script Lightbox Modal Murni JS -->
    <script>
        function openLightbox(imageUrl, caption) {
            const modal = document.getElementById('lightboxModal');
            const img = document.getElementById('lightboxImage');
            const cap = document.getElementById('lightboxCaption');

            img.src = imageUrl;
            cap.innerText = caption;
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Stop scroll
        }

        // Foto diklik: ambil URL dari data-lightbox
        const photos = document.querySelectorAll('[data-lightbox]');
        photos.forEach(function(photo, index) {
            photo.addEventListener('click', function() {
                openLightbox(photo.dataset.lightbox, 'Foto ' + (index + 1) + ' dari ' + photos.length);
            });
        });

        function closeLightbox() {
            const modal = document.getElementById('lightboxModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto'; // Enable scroll
        }

        // Close on ESC key press
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeLightbox();
            }
        });
    </script>
@endsection
