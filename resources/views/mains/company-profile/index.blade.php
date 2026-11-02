@extends('layouts.layout')
@section('title', 'Company Profile - PT Dian Yogya Perdana')
@section('description', 'Company profile of PT Dian Yogya Perdana, a licensed Indonesian employment agency based in Yogyakarta, experienced since 2004.')

@section('content')
    <section class="py-10 bg-white">
        <div class="container mx-auto px-6 py-12">

            {{-- Logo --}}
            <div class="flex justify-center mb-10">
                <img loading="lazy" decoding="async" src="{{ asset('storage/bases/logoSingle.webp') }}" alt="PT Dian Yogya Perdana" class="w-40 md:w-52">
            </div>

            {{-- Intro --}}
            <div class="max-w-6xl mx-auto text-gray-800 leading-9 space-y-8">

                <p>
                    <strong>PT. Dian Yogya Perdana</strong> is a company with experience in: Recruitment management and
                    placement of workers from Indonesia. Established as a legal entity in 2004, we have over 18 years of
                    experience in employee recruitment and placement. It has provided thousands of workers from East Java,
                    Indonesia, and has become workers for various foreign-owned companies in various Asian countries, such
                    as NDK Quart, Yamaha Electronic, Shin Etsu, Murata, etc., which cannot be mentioned individually. The
                    company’s work competence has been demonstrated in planning, regulatory and personnel evaluation
                    services to meet the skill standards of clients’ labor recruitment needs.s
                </p>

                <p>
                    Consistently maintaining partner satisfaction is one of the company’s promise candidates in terms of
                    professionalism, skill, and ability to deliver on the promise. Prospect Recruitment Management Concept,
                    One-Stop Recruitment makes it easy for clients to meet the needs of large and small numbers of employees
                    to meet their desired skills. Easy contact with this company to simplify and expedite your inquiry needs
                    and needs will fulfill your wishes and be your reference for a company with a transparent legal entity
                    in the field of recruitment.
                </p>

            </div>

            {{-- Bottom Content --}}
            <div class="grid lg:grid-cols-2 gap-14 items-start mt-16">

                {{-- Left --}}
                <div>
                    <img loading="lazy" decoding="async" src="{{ asset('storage/bases/legality.webp') }}" alt="Business License"
                        class="w-full rounded-lg shadow-md">
                </div>

                {{-- Right --}}
                <div class="space-y-8 text-gray-800">
                    <div>
                        <p class="leading-8">
                            PT. Dian Yogya Perdana, as of July 15, 2003, is an Executor of Indonesian Private Worker
                            Dispatching Company (PPTKIS) in Hadiningrat Special Region of Yogyakarta.
                        </p>
                    </div>

                    <div>
                        <ul class="list-disc pl-6 space-y-3">
                            <li>
                                Deed of establishment of PT. Dian Yogya Perdana
                                (the first) Number: 24 on 15 July 2003
                            </li>
                        </ul>
                    </div>

                    <div class="space-y-8">
                        <h3 class="leading-8">
                            The amendments to the deed adjusting the stipulation of state regulations to date are as follows
                        </h3>

                        <ul class="list-disc pl-6 space-y-3">
                            <li>Deed number : 2 on March 14, 2006</li>
                            <li>Deed number : 9 on 15 August 2008</li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="relative bg-[#1C1259] text-white overflow-visible lg:mt-20">
        <div class="container mx-auto px-6 max-w-6xl relative">

            <div class="grid lg:grid-cols-12 gap-10 items-center min-h-[400px] lg:min-h-[450px]">

                {{-- Left Content --}}
                <div class="py-12 lg:py-16 order-2 lg:order-1 lg:col-span-7 z-10">
                    <h2 class="text-3xl md:text-5xl font-bold mb-6 tracking-wide">
                        Our President
                    </h2>

                    <p class="leading-relaxed text-white/90 text-sm md:text-base max-w-2xl text-justify lg:text-left">
                        Chief Director of PT Dian Yogya Perdana. He was in the recruitment industry and started his career
                        at a relatively young age. From 1991 to the present, he has focused on providing resident workers
                        from Central Java Indonesia to various companies in Asia, especially Malaysia. In order to maintain
                        the quality of the workforce, he directly participates in training organized by the ILO. From 1985
                        until 1990 he graduated from Janabadra University Faculty of Economics.
                    </p>

                    {{-- Signature & Name Layout --}}
                    <div class="mt-8 flex items-center gap-6 flex-wrap">
                        <div class="w-32 md:w-40 flex items-center justify-center">
                            <img loading="lazy" decoding="async" src="{{ asset('storage/bases/ttdDarsum.webp') }}" alt="Signature"
                                class="w-full object-contain invert brightness-0">
                        </div>

                        <div class="flex flex-col justify-center">
                            <h3 class="text-xl md:text-2xl font-bold tracking-wide">
                                H. Darsum, SE
                            </h3>
                            <p class="uppercase tracking-widest text-xs mt-0.5 text-white/70 font-medium">
                                President Director
                            </p>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2 lg:col-span-5 relative h-72 lg:h-full hidden justify-center lg:block">
                    <img loading="lazy" decoding="async" src="{{ asset('storage/bases/hDarsum.webp') }}" alt="President"
                        class="
                        absolute 
                        bottom-0 
                        right-0 
                        left-0 
                        lg:left-auto 
                        mx-auto 
                        lg:mx-0
                        /* Di desktop, buat tinggi gambar 125% dari container biru */
                        h-[280px] 
                        md:h-[360px] 
                        lg:h-[125%] 
                        /* Dorong paksa gambar ke atas agar kepalanya keluar banner */
                        lg:-top-[25%]
                        w-auto 
                        object-contain 
                        object-bottom 
                        z-20
                    ">
                </div>

            </div>

        </div>
    </section>

    <div class="h-20"></div>
@endsection
