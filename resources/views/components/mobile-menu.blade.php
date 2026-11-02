@php($menus = config('navigation.menus', []))

<!-- Mobile Menu (dibuka lewat tombol burger) -->
<div x-show="mobileOpen" x-transition.opacity.duration.150ms @click.outside="mobileOpen = false"
    class="lg:hidden container mx-auto px-6" style="display: none;">
    <nav class="bg-[#01093F] rounded-lg shadow-xl border border-slate-800 py-2">
        @foreach ($menus as $menu)
            @if ($menu['dropdown'] ?? false)
                <div x-data="{ open: false }">
                    <button type="button" @click="open = !open" :aria-expanded="open"
                        class="w-full flex items-center justify-between gap-3 px-5 py-3 text-white hover:text-[#FF2500] transition-colors">
                        <span class="flex items-center gap-3">
                            <i data-lucide="{{ $menu['icon'] }}" class="w-5 h-5"></i>
                            {{ $menu['label'] }}
                        </span>
                        <span class="transition-transform duration-200" :class="open ? 'rotate-180' : ''">
                            <i data-lucide="chevron-down" class="w-5 h-5"></i>
                        </span>
                    </button>
                    <div x-show="open" x-transition style="display: none;" class="bg-slate-900/40">
                        @foreach ($menu['children'] as $child)
                            <a href="{{ $child['href'] }}"
                                class="block pl-14 pr-5 py-2.5 text-sm text-gray-200 hover:text-[#FF2500] transition-colors">
                                {{ $child['label'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            @else
                <a href="{{ $menu['href'] }}"
                    class="flex items-center gap-3 px-5 py-3 text-white hover:text-[#FF2500] transition-colors">
                    <i data-lucide="{{ $menu['icon'] }}" class="w-5 h-5"></i>
                    {{ $menu['label'] }}
                </a>
            @endif
        @endforeach

        <div class="border-t border-slate-700 mt-2 pt-3 px-5 pb-2 space-y-2 text-sm text-gray-300">
            <div class="flex items-center gap-3">
                <i class="fa-solid fa-phone"></i>
                <span>(+62) 856-0200-1555</span>
            </div>
            <div class="flex items-start gap-3">
                <i class="fa-solid fa-map-location-dot mt-1"></i>
                <span>Jl. Ringroad Selatan No. 1, Glugo, D.I. Yogyakarta</span>
            </div>
        </div>
    </nav>
</div>
