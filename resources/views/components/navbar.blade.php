<nav class="mx-auto xl:max-w-[1000px] max-w-[900px] pt-[30px] hidden lg:block">
    <div class="w-full bg-[#01093F] px-10">
        <div class="flex items-center justify-center lg:gap-8 xl:gap-12">
            @foreach ($menus as $menu)
                <x-nav-item :href="$menu['href']" :icon="$menu['icon']" :dropdown="$menu['dropdown'] ?? false" :children="$menu['children'] ?? []">
                    {{ $menu['label'] }}
                </x-nav-item>
            @endforeach
        </div>
    </div>
</nav>
