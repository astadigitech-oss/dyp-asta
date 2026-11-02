<footer class="w-full bg-[#1e2229] text-white pt-12 pb-8 font-sans">
    <div class="container mx-auto px-6">

        <div class="border-t border-gray-600/50 mb-10"></div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">

            <div class="md:col-span-8 flex flex-col gap-5">
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 rounded-full overflow-hidden shrink-0 bg-transparent flex items-center justify-center">
                        <img loading="lazy" decoding="async" src="{{ asset('storage/bases/logoSingle.webp') }}" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h2 class="font-bold text-lg tracking-wide leading-tight">PT DIAN YOGYA PERDANA</h2>
                        <span class="text-xs text-cyan-400 font-medium tracking-wider uppercase">Employment
                            Agency</span>
                    </div>

                </div>

                <p class="text-gray-400 text-sm max-w-xl italic leading-relaxed">
                    "Licensed Employment Agencies make it easy to recruit skilled workers from Indonesia. Fast,
                    accurate, safe and transparent. Experience since 2004."
                </p>

                @if (config('navigation.social.linkedin'))
                    <div class="mt-2">
                        <a href="{{ config('navigation.social.linkedin') }}" target="_blank" rel="noopener"
                            aria-label="LinkedIn PT Dian Yogya Perdana"
                            class="text-gray-400 hover:text-white transition-colors duration-200 inline-block">
                            <i class="fa-brands fa-linkedin text-[30px]"></i>
                        </a>
                    </div>
                @endif
            </div>

            <div class="md:col-span-4 flex flex-col gap-6 md:ml-auto w-full md:w-auto">

                <div class="flex items-start gap-4">
                    <div class="text-gray-400 mt-1 shrink-0">
                        <i data-lucide="phone-call" class="w-6 h-6"></i>
                    </div>
                    <div class="text-gray-300 text-sm font-semibold tracking-wide space-y-1">
                        <div>(+62) 856-0200-1555</div>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="text-gray-400 mt-1 shrink-0">
                        <i data-lucide="map-pin" class="w-6 h-6"></i>
                    </div>
                    <div class="text-gray-300 text-sm font-medium leading-relaxed">
                        <div class="font-bold mb-0.5 text-white">Jl. Ringroad Selatan No. 1, Glugo</div>
                        <div class="text-gray-400">D.I. Yogyakarta</div>
                    </div>
                </div>

            </div>
        </div>

        <div class="border-t border-gray-700/40 mt-10 pt-6 text-center text-xs text-gray-500">
            <p>&copy; {{ date('Y') }} PT Dian Yogya Perdana. All rights reserved.</p>
        </div>

    </div>
</footer>
