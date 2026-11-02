{{-- Pagination sederhana dari data API: ['current_page' => .., 'last_page' => ..] --}}
@props(['pagination', 'params' => [], 'fragment' => null])

@if ($pagination && $pagination['last_page'] > 1)
    @php
        $current = $pagination['current_page'];
        $last = $pagination['last_page'];
        $pageUrl = fn($page) => request()->url() . '?' . http_build_query(array_filter([...$params, 'page' => $page > 1 ? $page : null])) . ($fragment ? '#' . $fragment : '');
    @endphp

    <div class="mt-16 flex justify-center">
        <nav class="flex flex-wrap items-center justify-center gap-2" aria-label="Pagination">

            @if ($current > 1)
                <a href="{{ $pageUrl($current - 1) }}" aria-label="Halaman sebelumnya"
                    class="flex h-11 w-11 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-500 transition hover:border-[#21479A] hover:text-[#21479A]">
                    <i class="fa-solid fa-chevron-left text-sm"></i>
                </a>
            @endif

            @for ($page = 1; $page <= $last; $page++)
                @if ($page === $current)
                    <span aria-current="page"
                        class="flex h-11 w-11 items-center justify-center rounded-full bg-[#21479A] font-semibold text-white">
                        {{ $page }}
                    </span>
                @else
                    <a href="{{ $pageUrl($page) }}"
                        class="flex h-11 w-11 items-center justify-center rounded-full border border-gray-200 bg-white transition hover:border-[#21479A] hover:text-[#21479A]">
                        {{ $page }}
                    </a>
                @endif
            @endfor

            @if ($current < $last)
                <a href="{{ $pageUrl($current + 1) }}" aria-label="Halaman berikutnya"
                    class="flex h-11 w-11 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-500 transition hover:border-[#21479A] hover:text-[#21479A]">
                    <i class="fa-solid fa-chevron-right text-sm"></i>
                </a>
            @endif

        </nav>
    </div>
@endif
