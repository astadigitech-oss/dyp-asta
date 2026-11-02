@props(['href', 'icon', 'dropdown' => false, 'children' => []])

@if ($dropdown)
    <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false"
        class="relative {{ $attributes->get('class') }}">

        <div
            class="flex items-center gap-3 py-4 px-5 transition-all duration-300 text-white border-b-[5px] border-t-[5px] border-[#01093F] hover:border-b-[#FF2500] cursor-pointer">
            <i data-lucide="{{ $icon }}"></i>
            <p class="lg:text-sm xl:text-md">{{ $slot }}</p>
            <i data-lucide="chevron-down" class="transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
        </div>

        <div x-show="open" x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="transform opacity-0 scale-95 translate-y-1"
            x-transition:enter-end="transform opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="transform opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="transform opacity-0 scale-95 translate-y-1"
            class="absolute left-0 mt-0 w-56 rounded-md shadow-lg bg-[#01093F] ring-1 ring-black ring-opacity-5 z-50 py-2 border border-slate-800"
            style="display: none;">

            @foreach ($children as $child)
                <a href="{{ $child['href'] }}"
                    class="block px-4 py-2 text-sm text-white hover:bg-slate-800 hover:text-[#FF2500] transition-colors">
                    {{ $child['label'] }}
                </a>
            @endforeach
        </div>
    </div>
@else
    <!-- Regular Link -->
    <a href="{{ $href }}"
        {{ $attributes->merge([
            'class' =>
                'flex items-center gap-3 py-4 px-5 transition-all duration-300 text-white border-b-[5px] border-t-[5px] border-[#01093F] hover:border-b-[#FF2500]',
        ]) }}>
        <i data-lucide="{{ $icon }}"></i>
        <p class="lg:text-sm xl:text-md">{{ $slot }}</p>
    </a>
@endif
