@extends('layouts.layout')

@section('body_class', 'bg-gray-100')
@section('hero_class', 'min-h-screen')

@section('hero')
    <div class="container mx-auto px-6 flex items-center justify-center min-h-[70vh]">
        <div class="text-center max-w-5xl">
            <h1 class="text-white font-bold leading-tight text-2xl sm:text-3xl md:text-4xl lg:text-5xl">
                Smart Solutions for Optimal Performance
                Through Trusted Outsourcing Services
            </h1>

            <a href="/contact"
                class="inline-block mt-8 md:mt-10 bg-[#020B4D] hover:bg-[#06126d] px-8 md:px-16 py-3 md:py-3 rounded-md text-white font-semibold text-base md:text-lg transition">
                Reach Out
            </a>
        </div>
    </div>
@endsection

@section('content')
    <!-- BENEFITS -->
    <section class=""
        style="background-image: url('{{ asset('storage/bases/bg1.webp') }}'); background-size: cover; background-position: center;">
        <div class="container mx-auto px-6 flex items-center justify-center pb-3 lg:pb-10 relative -top-10 lg:-top-16">

            {{-- Desktop --}}
            <div class="hidden lg:grid w-full grid-cols-3 px-6 gap-10 items-start">
                <div class="bg-white rounded-lg border border-gray-200">
                    <div class="group p-4 relative">

                        <div class="w-full h-40 relative bg-cover bg-center rounded-md"
                            style="background-image: url('{{ asset('storage/bases/benefit1.webp') }}');">


                            <div class="absolute inset-0 rounded-md bg-black/70"></div>

                            <div
                                class="w-full h-full text-center relative z-10 flex items-center justify-center text-white font-bold text-3xl">
                                Qualified <br>
                                Employees
                            </div>

                            <div class="absolute bottom-0 rounded-md flex justify-center w-full">
                                <div class="bg-white px-8 py-1 rounded-t-lg cursor-pointer">
                                    <i data-lucide="chevron-down"></i>
                                </div>
                            </div>
                        </div>

                        <div
                            class="
                            block lg:absolute
                            lg:top-full lg:left-0 lg:w-full
                            bg-white rounded-b-lg lg:-mt-1
                            border-b border-r border-l border-gray-200
                            p-4

                            lg:shadow-lg lg:z-50

                            lg:opacity-0 lg:invisible lg:-translate-y-2
                            lg:transition-all lg:duration-300

                            lg:group-hover:opacity-100
                            lg:group-hover:visible
                            lg:group-hover:translate-y-0
                            ">

                            <div class="text-sm text-black">
                                Our full-time employees are selected for their
                                dedication, discipline, and work ethic. We prioritize those who are in good health, of
                                working age,
                                and enthusiastic about achieving company goals in a professional manner
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg border border-gray-200">
                    <div class="group p-4 relative">

                        <div class="w-full h-40 relative bg-cover bg-center rounded-md"
                            style="background-image: url('{{ asset('storage/main/bestRequirement.webp') }}');">


                            <div class="absolute inset-0 rounded-md bg-black/70"></div>

                            <div
                                class="w-full h-full text-center relative z-10 flex items-center justify-center text-white font-bold text-3xl">
                                Best <br>
                                Reqruitment
                            </div>

                            <div class="absolute bottom-0 rounded-md flex justify-center w-full">
                                <div class="bg-white px-8 py-1 rounded-t-lg cursor-pointer">
                                    <i data-lucide="chevron-down"></i>
                                </div>
                            </div>
                        </div>

                        <div
                            class="
                            block lg:absolute
                            lg:top-full lg:left-0 lg:w-full
                            bg-white rounded-b-lg lg:-mt-1
                            border-b border-r border-l border-gray-200
                            p-4

                            lg:shadow-lg lg:z-50

                            lg:opacity-0 lg:invisible lg:-translate-y-2
                            lg:transition-all lg:duration-300

                            lg:group-hover:opacity-100
                            lg:group-hover:visible
                            lg:group-hover:translate-y-0
                            ">

                            <div class="text-sm text-black">
                                We implement standardized qualification tests for job
                                seekers, offer career guidance, and introduce the culture of destination countries to
                                ensure smooth
                                adaptation in fast-paced work environments.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg border border-gray-200">
                    <div class="group p-4 relative">

                        <div class="w-full h-40 relative bg-cover bg-center rounded-md"
                            style="background-image: url('{{ asset('storage/main/properCompany.webp') }}');">


                            <div class="absolute inset-0 rounded-md bg-black/70"></div>

                            <div
                                class="w-full h-full text-center relative z-10 flex items-center justify-center text-white font-bold text-3xl">
                                Proper <br>
                                Company
                            </div>

                            <div class="absolute bottom-0 rounded-md flex justify-center w-full">
                                <div class="bg-white px-8 py-1 rounded-t-lg cursor-pointer">
                                    <i data-lucide="chevron-down"></i>
                                </div>
                            </div>
                        </div>

                        <div
                            class="
                            block lg:absolute
                            lg:top-full lg:left-0 lg:w-full
                            bg-white rounded-b-lg lg:-mt-1
                            border-b border-r border-l border-gray-200
                            p-4

                            lg:shadow-lg lg:z-50

                            lg:opacity-0 lg:invisible lg:-translate-y-2
                            lg:transition-all lg:duration-300

                            lg:group-hover:opacity-100
                            lg:group-hover:visible
                            lg:group-hover:translate-y-0
                            ">

                            <div class="text-sm text-black">
                                We comply with all regulations and laws, respect our
                                partners’ policies, and conduct regular inspections. We ensure service quality and
                                uphold employee
                                rights through consistent training and evaluations.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile & Tablet -->
            <div class="lg:hidden overflow-x-auto snap-x snap-mandatory scroll-smooth">
                <div class="flex">

                    <div class="min-w-full lg:min-w-[50%] px-4 snap-center">
                        <div class="bg-white rounded-lg border border-gray-200">
                            <div class="group p-4 relative">

                                <div class="w-full h-40 relative bg-cover bg-center rounded-md"
                                    style="background-image: url('{{ asset('storage/bases/benefit1.webp') }}');">


                                    <div class="absolute inset-0 rounded-md bg-black/70"></div>

                                    <div
                                        class="w-full h-full text-center relative z-10 flex items-center justify-center text-white font-bold text-3xl">
                                        Qualified <br>
                                        Employees
                                    </div>

                                    <div class="absolute bottom-0 rounded-md flex justify-center w-full">
                                        <div class="bg-white px-8 py-1 rounded-t-lg cursor-pointer">
                                            <i data-lucide="chevron-down"></i>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="
                            block xl:absolute
                            xl:top-full xl:left-0 xl:w-full
                            bg-white rounded-b-lg xl:-mt-1
                            border-b border-r border-l border-gray-200
                            p-4

                            xl:shadow-lg xl:z-50

                            xl:opacity-0 xl:invisible xl:-translate-y-2
                            xl:transition-all xl:duration-300

                            xl:group-hover:opacity-100
                            xl:group-hover:visible
                            xl:group-hover:translate-y-0
                            ">

                                    <div class="text-sm text-black">
                                        Our full-time employees are selected for their
                                        dedication, discipline, and work ethic. We prioritize those who are in good
                                        health, of working age,
                                        and enthusiastic about achieving company goals in a professional manner
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="min-w-full lg:min-w-[50%] px-4 snap-center">
                        <div class="bg-white rounded-lg border border-gray-200">
                            <div class="group p-4 relative">

                                <div class="w-full h-40 relative bg-cover bg-center rounded-md"
                                    style="background-image: url('{{ asset('storage/main/bestRequirement.webp') }}');">


                                    <div class="absolute inset-0 rounded-md bg-black/70"></div>

                                    <div
                                        class="w-full h-full text-center relative z-10 flex items-center justify-center text-white font-bold text-3xl">
                                        Best <br>
                                        Recruitment
                                    </div>

                                    <div class="absolute bottom-0 rounded-md flex justify-center w-full">
                                        <div class="bg-white px-8 py-1 rounded-t-lg cursor-pointer">
                                            <i data-lucide="chevron-down"></i>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="
                            block xl:absolute
                            xl:top-full xl:left-0 xl:w-full
                            bg-white rounded-b-lg xl:-mt-1
                            border-b border-r border-l border-gray-200
                            p-4

                            xl:shadow-lg xl:z-50

                            xl:opacity-0 xl:invisible xl:-translate-y-2
                            xl:transition-all xl:duration-300

                            xl:group-hover:opacity-100
                            xl:group-hover:visible
                            xl:group-hover:translate-y-0
                            ">

                                    <div class="text-sm text-black">
                                        We implement standardized qualification tests for job
                                        seekers, offer career guidance, and introduce the culture of destination
                                        countries to ensure smooth
                                        adaptation in fast-paced work environments.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="min-w-full lg:min-w-[50%] px-4 snap-center">
                        <div class="bg-white rounded-lg border border-gray-200">
                            <div class="group p-4 relative">

                                <div class="w-full h-40 relative bg-cover bg-center rounded-md"
                                    style="background-image: url('{{ asset('storage/main/properCompany.webp') }}');">


                                    <div class="absolute inset-0 rounded-md bg-black/70"></div>

                                    <div
                                        class="w-full h-full text-center relative z-10 flex items-center justify-center text-white font-bold text-3xl">
                                        Proper <br>
                                        Company
                                    </div>

                                    <div class="absolute bottom-0 rounded-md flex justify-center w-full">
                                        <div class="bg-white px-8 py-1 rounded-t-lg cursor-pointer">
                                            <i data-lucide="chevron-down"></i>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="
                            block xl:absolute
                            xl:top-full xl:left-0 xl:w-full
                            bg-white rounded-b-lg xl:-mt-1
                            border-b border-r border-l border-gray-200
                            p-4

                            xl:shadow-lg xl:z-50

                            xl:opacity-0 xl:invisible xl:-translate-y-2
                            xl:transition-all xl:duration-300

                            xl:group-hover:opacity-100
                            xl:group-hover:visible
                            xl:group-hover:translate-y-0
                            ">

                                    <div class="text-sm text-black">
                                        We comply with all regulations and laws, respect our
                                        partners’ policies, and conduct regular inspections. We ensure service quality
                                        and uphold employee
                                        rights through consistent training and evaluations.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Galeri dan Cabang --}}
    <section class="relative "
        style="background-image: url('{{ asset('storage/bases/bg1.webp') }}');
       background-repeat: repeat;
       background-size: auto;">
        <div class="bg-black/70 absolute w-full h-full inset-0"></div>
        <div class="w-full relative xl:-top-20">

            <div class="relative h-[380px] hidden lg:block">

                <!-- CARD MERAH (BELAKANG) -->
                <div class="absolute right-0 top-20 w-[52%] pl-10 bg-[#7A2030] rounded-xl overflow-hidden z-0">

                    <div class="w-full flex justify-center">
                        <div class="px-14 py-10 min-h-[350px] 2xl:w-[90%] lg:w-[95%]">

                            <h2 class="text-white text-3xl font-bold mb-8">
                                Branch Office
                            </h2>

                            <div class="space-y-6 relative z-10">

                                {{-- Perulangan Branch --}}
                                @foreach ($branches as $branch)
                                    <a href="{{ route('contact') }}#branch-office"
                                        class="flex justify-between items-center border-b border-white/30 pb-3 text-white font-semibold hover:opacity-80 transition">
                                        <span>{{ $branch['name'] }}</span>
                                        <i data-lucide="arrow-right"></i>
                                    </a>
                                @endforeach

                            </div>

                        </div>

                    </div>
                    <!-- Building -->
                    <img loading="lazy" decoding="async" src="{{ asset('storage/bases/branch.webp') }}" alt=""
                        class="absolute bottom-0 right-0 h-[180px] object-contain">
                </div>

                <!-- CARD BIRU (DEPAN) -->
                <div class="absolute left-0 top-0 w-[52%] bg-[#00125D] rounded-xl p-10 z-10 shadow-xl">

                    <!-- Vertical Text -->
                    <div
                        class="absolute left-[-55px] top-1/2 -translate-y-1/2 -rotate-90 text-white font-bold tracking-wider whitespace-nowrap">
                        COMPANY PROFILE
                    </div>

                    <div class="flex justify-between items-center mb-4">

                        <h2 class="text-white text-2xl font-bold">
                            Media Gallery
                        </h2>

                        <a href="{{ route('gallery.index') }}"
                            class="border border-white rounded-full px-6 py-2 text-white text-sm flex items-center gap-2 hover:bg-white hover:text-[#00125D] transition">
                            Visit Link
                            <i data-lucide="external-link"></i>
                        </a>

                    </div>

                    <div class="w-full flex justify-center">
                        <video class="w-full max-w-[550px] h-[250px] pl-10 object-cover rounded-md" muted loop
                            playsinline preload="none" data-autoplay
                            poster="{{ asset('storage/bases/homeGallery-poster.webp') }}">

                            <source src="{{ asset('storage/bases/homeGallery.mp4') }}" type="video/mp4">

                            Browser Anda tidak mendukung video.
                        </video>
                    </div>
                </div>

            </div>

            <!-- MOBILE -->
            <div class="lg:hidden">

                <div class="bg-[#00125D] rounded-xl p-6">

                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-white text-xl font-bold">
                            Media Gallery
                        </h2>

                        <a href="{{ route('gallery.index') }}" class="border border-white rounded-full px-4 py-2 text-xs text-white">
                            Visit Link
                        </a>
                    </div>


                    <video class="w-full h-52 object-cover rounded-md" muted loop playsinline preload="none" data-autoplay
                            poster="{{ asset('storage/bases/homeGallery-poster.webp') }}">
                        <source src="{{ asset('storage/bases/homeGallery.mp4') }}" type="video/mp4">

                        Browser Anda tidak mendukung video.
                    </video>
                </div>

                <div class="bg-[#7A2030] rounded-xl p-6 relative overflow-hidden">

                    <h2 class="text-white text-xl font-bold mb-6">
                        Branch Office
                    </h2>

                    <div class="space-y-5">

                        {{-- Perulangan Branch --}}
                        @foreach ($branches as $branch)
                            <a href="{{ route('contact') }}#branch-office" class="block border-b border-white/30 pb-3 text-white">
                                {{ $branch['name'] }}
                            </a>
                        @endforeach

                    </div>

                </div>

            </div>

        </div>
    </section>

    {{-- Quote --}}
    <section class="relative pb-80 xl:pb-50 pt-30"
        style="background-image:url('{{ asset('storage/bases/shakeHand.webp') }}'); background-size: cover;">
        <div class="bg-black/70 absolute w-full h-full inset-0"></div>
        <div class="flex justify-center">
            <h1 class="text-white text-center font-bold text-[40px] xl:text-[50px] relative z-10 max-w-5xl">
                "We support companies in
                hiring qualified Indonesian employees to achive their corporate goals. </h1>
        </div>

        <!-- Card -->
        <div class="absolute -bottom-30 xl:-bottom-15 w-full flex justify-center">
            <div class="z-10 max-w-6xl mx-auto px-6">
                <div class="-mt-24 bg-white shadow-lg">

                    <div class="grid lg:grid-cols-2">

                        <!-- Left -->
                        <div class="p-6 lg:px-5 lg:py-3">
                            <h2 class="text-2xl lg:text-3xl font-bold text-[#00145E] mb-3">
                                Why Choose Us?
                            </h2>

                            <p class="text-base lg:text-lg leading-relaxed text-gray-800 max-w-lg">
                                Providing professional recruitment services with quality
                                management to meet corporate needs and ensure client
                                satisfaction.
                            </p>
                        </div>

                        <!-- Right -->
                        <div class="overflow-hidden lg:overflow-visible border-l border-gray-300">
                            <div
                                class="flex lg:grid lg:grid-cols-3 h-full overflow-x-auto lg:overflow-visible snap-x snap-mandatory scroll-smooth">

                                <!-- Item -->
                                <div
                                    class="min-w-full md:min-w-[50%] lg:min-w-0 snap-center flex flex-col items-center justify-center text-center px-3 py-6">

                                    <div
                                        class="w-20 h-20 lg:w-24 lg:h-24 rounded-full bg-[#D8DDEF] flex items-center justify-center shadow-md xl:-mt-12 mb-4">

                                        <i data-lucide="file-search"
                                            class="w-8 h-8 lg:w-10 lg:h-10 text-[#00145E]"></i>
                                    </div>

                                    <h3
                                        class="font-extrabold text-[#00145E] text-sm lg:text-base leading-tight uppercase">
                                        COMPREHENSIVE
                                    </h3>
                                    <h3
                                        class="font-extrabold text-[#00145E] text-sm lg:text-base leading-tight uppercase">
                                        SCREENING
                                    </h3>
                                </div>

                                <!-- Item -->
                                <div
                                    class="min-w-full md:min-w-[50%] lg:min-w-0 snap-center flex flex-col items-center justify-center text-center px-3 py-6">

                                    <div
                                        class="w-20 h-20 lg:w-24 lg:h-24 rounded-full bg-[#D8DDEF] flex items-center justify-center shadow-md xl:-mt-12 mb-4">

                                        <i data-lucide="badge-check"
                                            class="w-8 h-8 lg:w-10 lg:h-10 text-[#00145E]"></i>
                                    </div>

                                    <h3
                                        class="font-extrabold text-[#00145E] text-sm lg:text-base leading-tight uppercase">
                                        SCHEDULING
                                    </h3>
                                    <h3
                                        class="font-extrabold text-[#00145E] text-sm lg:text-base leading-tight uppercase">
                                        RECRUITMENT
                                    </h3>
                                </div>

                                <!-- Item -->
                                <div
                                    class="min-w-full md:min-w-[50%] lg:min-w-0 snap-center flex flex-col items-center justify-center text-center px-3 py-6">

                                    <div
                                        class="w-20 h-20 lg:w-24 lg:h-24 rounded-full bg-[#D8DDEF] flex items-center justify-center shadow-md xl:-mt-12 mb-4">

                                        <i data-lucide="shield-check"
                                            class="w-8 h-8 lg:w-10 lg:h-10 text-[#00145E]"></i>
                                    </div>

                                    <h3
                                        class="font-extrabold text-[#00145E] text-sm lg:text-base leading-tight uppercase">
                                        ESTABLISH
                                    </h3>
                                    <h3
                                        class="font-extrabold text-[#00145E] text-sm lg:text-base leading-tight uppercase">
                                        GUIDELINES
                                    </h3>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Stats --}}
    <section class="bg-[#C6CFE4] py-16">
        <div class="container mx-auto px-6 pt-20 pb-5">

            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <!-- Left -->
                <div>
                    <h2 class="text-3xl lg:text-5xl font-bold text-[#00145E] mb-6">
                        Simple and High Quality
                    </h2>

                    <p class="text-base lg:text-lg leading-relaxed text-[#00145E] max-w-xl">
                        PT Dian Yogya Perdana ensures service quality through a
                        reliable recruitment system, professional communication,
                        and adherence to quality principles. With years of
                        experience and clear legality, the company offers practical
                        and high-quality recruitment solutions to meet corporate
                        workforce needs and ensure seamless cooperation.
                    </p>
                </div>

                <!-- Right -->
                <div class="relative">

                    <!-- World Map -->
                    <img loading="lazy" decoding="async" src="{{ asset('storage/bases/world.webp') }}" alt="World Map" class="w-full opacity-50">

                    <!-- Stats -->
                    <div class="absolute inset-0">

                        <!-- Awards -->
                        <div class="absolute top-[15%] left-[15%] text-center">
                            <h3 class="text-4xl lg:text-6xl font-extrabold italic text-[#00145E]">
                                25+
                            </h3>
                            <p class="text-sm lg:text-lg text-[#00145E]">
                                Awards
                            </p>
                        </div>

                        <!-- Experience -->
                        <div class="absolute top-[15%] right-[10%] text-center">
                            <h3 class="text-4xl lg:text-6xl font-extrabold italic text-[#00145E]">
                                28+
                            </h3>
                            <p class="text-sm lg:text-lg text-[#00145E]">
                                Years Experience
                            </p>
                        </div>

                        <!-- Employees -->
                        <div class="absolute bottom-[15%] right-[15%] text-center">
                            <h3 class="text-5xl lg:text-7xl font-extrabold italic text-[#00145E]">
                                1,250+
                            </h3>
                            <p class="text-sm lg:text-lg text-[#00145E]">
                                Professional Employees
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    {{-- Insights --}}
    <section class="py-20 relative overflow-hidden"
        style="background-image: url('{{ asset('storage/bases/bg1.webp') }}');
       background-repeat: repeat;
       background-size: auto;">
        <div
            class="absolute inset-0
            bg-gradient-to-b
            from-[#C6CFE4]
            via-[#C6CFE4]/60
            via-50%
            to-transparent">
        </div>

        <div class="relative container mx-auto px-6 py-6">

            <!-- Header -->
            <div class="flex items-center justify-between mb-12">

                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-[#00145E]">
                        Latest Insights
                    </h2>

                    <p class="mt-3 text-gray-600">
                        News, updates, and highlights from our activities.
                    </p>
                </div>

                <a href="{{ route('insight.index') }}"
                    class="hidden md:flex items-center gap-2 px-7 py-3 rounded-full
                border-2 border-[#24479C]
                text-[#24479C] font-semibold
                hover:bg-[#24479C]
                hover:text-white
                transition">

                    View All

                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>

            </div>

            <!-- Mobile / Tablet Slider -->
            <div class="lg:hidden overflow-x-auto snap-x snap-mandatory scroll-smooth">
                <div class="flex gap-5 pb-2 items-stretch">

                    @foreach ($latestInsights as $insight)
                        <article class="min-w-[85%] md:min-w-[48%] snap-center flex">
                            <div
                                class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 flex flex-col h-full w-full">

                                <div class="overflow-hidden">
                                    <img loading="lazy" decoding="async" src="{{ $insight['image'] }}"
                                        class="w-full h-56 object-cover transition duration-500 hover:scale-110">
                                </div>

                                <div class="p-6 flex flex-col flex-1">

                                    <span
                                        class="inline-flex px-3 py-1 rounded-full bg-blue-50 text-[#00145E] text-xs font-semibold w-fit">
                                        {{ $insight['category'] }}
                                    </span>

                                    <h3 class="mt-4 text-xl font-bold text-[#00145E] line-clamp-2">
                                        {{ $insight['name'] }}
                                    </h3>

                                    <p class="mt-3 text-gray-600 line-clamp-3 flex-1">
                                        {{ $insight['description'] }}
                                    </p>

                                    <div class="flex items-center justify-between mt-6">
                                        <p class="text-xs text-gray-400">
                                            {{ $insight['date'] }}
                                        </p>

                                        <a href="{{ route('insight.show', $insight['slug']) }}"
                                            class="flex items-center gap-2 font-semibold text-[#00145E]">
                                            Read More
                                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </article>
                    @endforeach

                </div>
            </div>

            <!-- Desktop Grid -->
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
                                    <i data-lucide="arrow-right"
                                        class="w-4 h-4 transition group-hover:translate-x-1"></i>
                                </a>

                            </div>

                        </div>

                    </article>
                @endforeach

            </div>

        </div>

    </section>

    {{-- Clients --}}
    <section class="w-full bg-[#536ea8] py-8 relative">

        <div class="container mx-auto px-6 relative">
            <div class="absolute -top-15 lg:-top-20 left-6 z-10 bg-[#536ea8] px-8 py-2 text-white rounded">
                <h2 class="text-xl lg:text-3xl font-bold">
                    Our Clients
                </h2>
            </div>
        </div>

        <div id="logo-slider" class="splide w-full">
            <div class="splide__track">
                <div class="splide__list gap-16">
                    {{-- Perulangan logo client --}}
                    @foreach ($clientLogos as $client)
                        <div class="splide__slide flex items-center justify-center w-40 h-20 shrink-0">
                            <img loading="lazy" decoding="async" src="{{ $client['image'] }}" class="max-w-full max-h-full object-contain">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Testimoni --}}
    <section class="bg-[#01093f]">
        <div class="container mx-auto px-6 space-y-10 py-12">
            <div class="title justify-center flex">
                <div class="text-center text-white">
                    <h1 class="text-5xl font-bold">Testimonials</h1>
                    <h3 class="text-lg mt-2">What our clients say</h3>
                </div>
            </div>
            <div id="testimoni-slider" class="splide w-full">
                <div class="splide__track">
                    <div class="splide__list">
                        {{-- Perulangan Testimonial --}}
                        @foreach ($testimonials as $testimoni)
                            <div class="splide__slide rounded-3xl p-8 shadow-sm"
                                style="background-image: url('{{ asset('storage/bases/bg1.webp') }}');
                            background-repeat: repeat;
                            background-size: auto;">
                                <div class="grid grid-cols-12 gap-4 items-center border-b border-gray-100 pb-5 mb-5">
                                    <div class="col-span-8 flex items-center gap-4">
                                        <div
                                            class="w-16 h-12 bg-gray-100 rounded-xl flex items-center justify-center p-2 border shrink-0">
                                            <img loading="lazy" decoding="async" src="{{ $testimoni['image_office'] }}"
                                                class="max-w-full max-h-full object-contain">
                                        </div>
                                        <h3 class="font-bold text-xl text-[#00145E]">{{ $testimoni['name'] }}</h3>
                                    </div>
                                    <div class="col-span-4 flex justify-end gap-0.5 text-yellow-400">
                                        @for ($i = 0; $i < $testimoni['star']; $i++)
                                            <span>★</span>
                                        @endfor
                                    </div>
                                </div>
                                <div>
                                    <p class="text-[#01093f] font-semibold leading-relaxed text-base">
                                        {{ $testimoni['testimoni'] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <x-contact-section />
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Splide('#logo-slider', {
            type: 'loop', // Slider berputar terus tanpa mentok
            drag: 'free', // User tetap bisa drag/geser manual sesuka hati
            focus: 'center', // Titik fokus slider
            perPage: 'auto', // Jumlah item otomatis mendeteksi ukuran w-40 dari CSS
            autoWidth: true, // Mengizinkan lebar dinamis berbasis CSS Tailwind
            arrows: false, // Sembunyikan tombol panah kiri-kanan
            pagination: false, // Sembunyikan titik penanda halaman di bawah
            autoScroll: {
                speed: 1, // Kecepatan gerak (bisa kamu ubah, misal 0.8 biar lebih santai)
                pauseOnHover: false, // Logonya tetap jalan terus meski kursor mouse berada di atasnya
                pauseOnFocus: false,
            },
        }).mount(window.SplideExtensions); // Mount extension auto-scroll (di-bundle lewat app.js)

        new Splide('#testimoni-slider', {
            type: 'loop', // Slider berputar tanpa ujung
            drag: true, // Bisa digeser manual klik-tahan
            perPage: 2, // Menampilkan 2 card sekaligus di desktop
            perMove: 1, // Sekali geser otomatis maju 1 slide biar smooth patahnya
            gap: '24px', // Jarak sela antar card (sama dengan gap-6 Tailwind)
            arrows: false, // Sembunyikan panah bawaan
            pagination: false, // Sembunyikan titik dot bawah bawaan
            autoplay: true, // Jalan otomatis patah-patah
            interval: 4000, // Berhenti diam selama 4 detik sebelum geser berikutnya
            speed: 800, // Durasi efek slide geser (0.8 detik)

            // Responsive breakpoints agar di HP tampil 1 card utuh penuh
            breakpoints: {
                1024: {
                    perPage: 1, // Di tablet/HP bawah lebar 1024px tampil 1 card saja
                }
            }
        }).mount();
    });
</script>
@endpush
