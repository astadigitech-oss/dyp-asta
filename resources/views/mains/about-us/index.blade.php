@extends('layouts.layout')
@section('title', 'About Us - PT Dian Yogya Perdana')
@section('description', 'Get to know PT Dian Yogya Perdana, a licensed Indonesian employment agency in Yogyakarta, and the team behind our overseas placement services.')

@section('content')
    <section
        style="background-image: url('{{ asset('storage/bases/bg1.webp') }}');
       background-repeat: repeat;
       background-size: auto;">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-start">

                <div class="space-y-4">
                    <h2 class="text-sm font-bold uppercase tracking-wider text-slate-900">
                        OUR COMMITMENT
                    </h2>
                    <blockquote class="text-xl md:text-2xl font-bold text-blue-950 leading-relaxed">
                        “We are ready to provide quality employees and also help you recruit work assignments at your
                        destination. It has patent legality and is ready to meet all necessary procedural requirements.”
                    </blockquote>
                </div>

                <div class="text-slate-700 leading-relaxed pt-1 md:pt-9 text-base">
                    <p>
                        <span class="font-semibold text-slate-950">PT. Dian Yogya Perdana</span> is an experienced company in
                        the fields of: recruitment management and placement of workers from Indonesia. Formed a legal entity
                        since 2004, has more than 18 years of experience in recruitment and placement of workers. Has
                        provided thousands of workers from East Java, Indonesia to become workers for various foreign
                        companies in various Asian countries, such as NDK Quart, Yamaha Electronic,
                    </p>
                </div>

            </div>
        </div>

        <div class="container mx-auto px-6 py-12">

            <!-- Bagian Teks (Header) -->
            <div class="text-center max-w-4xl mx-auto mb-10 space-y-3">
                <h2 class="text-xl md:text-2xl font-bold uppercase tracking-wider text-blue-950">
                    OUR VALUES
                </h2>
                <p class="text-slate-700 leading-relaxed text-base md:text-lg">
                    Our core values reflect our commitment to excellence, ensuring fast, safe, appropriate, and transparent
                    services for both employers and employees.
                </p>
            </div>

            <!-- Bagian Grid Gambar -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-stretch">

                <!-- Gambar Kiri (Di dalam pesawat) -->
                <div class="md:col-span-3 h-[400px] md:h-[500px]">
                    <img loading="lazy" decoding="async" src="{{ asset('storage/bases/fly.webp') }}" alt="Employees inside airplane"
                        class="w-full h-full object-cover object-left rounded-2xl shadow-sm" />
                </div>

                <!-- Gambar Kanan (Foto bersama di PLBN Entikong) -->
                <div class="md:col-span-9 h-[400px] md:h-[500px]">
                    <img loading="lazy" decoding="async" src="{{ asset('storage/bases/group.webp') }}" alt="Group photo at Entikong"
                        class="w-full h-full object-cover object-right rounded-2xl shadow-sm" />
                </div>

            </div>

        </div>

        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-16 items-start">

                <div class="space-y-4">
                    <div class="space-y-1">
                        <h2 class="text-sm font-bold uppercase tracking-wider text-blue-950">
                            OUR EXPERTISE
                        </h2>
                        <p class="text-2xl md:text-3xl font-extrabold uppercase text-blue-950 tracking-tight">
                            28 YEARS OF EXPERIENCE IN
                        </p>
                    </div>
                    <p class="text-slate-700 text-lg font-bold leading-relaxed pt-2">
                        "Be next to you to meet your needs for quality employers from Indonesian with legal and trustworthy
                        procedures without forgetting labor rights"
                    </p>
                </div>

                <div class="space-y-6 pt-2">

                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-sm font-bold text-slate-900">
                            <span>Manufacturing</span>
                            <span>94%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-4 rounded-full overflow-hidden">
                            <div class="bg-blue-800 h-full rounded-full" style="width: 94%;"></div>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-sm font-bold text-slate-900">
                            <span>Plantation</span>
                            <span>80%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-4 rounded-full overflow-hidden">
                            <div class="bg-blue-800 h-full rounded-full" style="width: 80%;"></div>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <div class="flex justify-between items-center text-sm font-bold text-slate-900">
                            <span>Hospitality</span>
                            <span>73%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-4 rounded-full overflow-hidden">
                            <div class="bg-blue-800 h-full rounded-full" style="width: 73%;"></div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 px-0 md:px-6 lg:px-16">

                <!-- Kartu 1: Fast -->
                <div
                    class="bg-white p-8 md:p-10 rounded-[2rem] shadow-md border border-slate-50 flex flex-col justify-between">
                    <div class="space-y-4">
                        <h3 class="text-3xl font-extrabold text-slate-950 tracking-tight">
                            Fast
                        </h3>
                        <p class="text-slate-600 leading-relaxed text-base md:text-[1.05rem]">
                            It aims to expedite the hiring process of employers and objectively address their needs and
                            wishes through structured intermediary procedures.
                        </p>
                    </div>
                </div>

                <!-- Kartu 2: Appropriate -->
                <div
                    class="bg-white p-8 md:p-10 rounded-[2rem] shadow-md border border-slate-50 flex flex-col justify-between">
                    <div class="space-y-4">
                        <h3 class="text-3xl font-extrabold text-slate-950 tracking-tight">
                            Appropriate
                        </h3>
                        <p class="text-slate-600 leading-relaxed text-base md:text-[1.05rem]">
                            PT Dian Yogya Perdana is a suitable position to pass the company’s operational legitimacy and
                            fulfill the company’s need for quality employers.
                        </p>
                    </div>
                </div>

                <!-- Kartu 3: Safe -->
                <div
                    class="bg-white p-8 md:p-10 rounded-[2rem] shadow-md border border-slate-50 flex flex-col justify-between">
                    <div class="space-y-4">
                        <h3 class="text-3xl font-extrabold text-slate-950 tracking-tight">
                            Safe
                        </h3>
                        <p class="text-slate-600 leading-relaxed text-base md:text-[1.05rem]">
                            Prioritize suitable placements, use trained and qualified staff to identify potential employers
                            according to the needs of target companies, and regularly visit partner companies to identify
                            potential employees. Make employees feel safe
                        </p>
                    </div>
                </div>

                <!-- Kartu 4: Transparent -->
                <div
                    class="bg-white p-8 md:p-10 rounded-[2rem] shadow-md border border-slate-50 flex flex-col justify-between">
                    <div class="space-y-4">
                        <h3 class="text-3xl font-extrabold text-slate-950 tracking-tight">
                            Transparent
                        </h3>
                        <p class="text-slate-600 leading-relaxed text-base md:text-[1.05rem]">
                            Professionalism in affiliation, not only by meeting the company’s eligibility requirements, but
                            also by being open in the process of attracting potential employers. To be a sincere and
                            reliable partner.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-blue-950 py-16">
        <!-- Wrapper luar sekarang murni menggunakan warna background biru pekat -->
        <div class="relative  text-white overflow-hidden">
            <!-- Gambar Peta Dunia diletakkan di sini, otomatis lebar & tingginya proporsional -->
            <div class="absolute inset-0 z-0 pointer-events-none opacity-20 mix-blend-lighten">
                <img loading="lazy" decoding="async" src="{{ asset('storage/bases/world.webp') }}" alt="World Map Background"
                    class="w-full h-auto object-contain" />
            </div>
            <div class="container mx-auto px-6 py-12 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">

                    <!-- Kolom Kiri: Vision (Dengan Background Peta Dunia di dalamnya) -->
                    <div class="space-y-6 relative min-h-[300px] lg:min-h-[450px] flex flex-col justify-center">

                        <!-- Konten Visi tetap di atas gambar karena z-10 -->
                        <div class="relative z-10 space-y-6">
                            <h2 class="text-4xl font-extrabold tracking-tight">
                                Vision
                            </h2>
                            <p
                                class="text-slate-200 leading-relaxed text-base md:text-lg text-justify bg-blue-950 bg-opacity-40 p-4 rounded-xl backdrop-blur-sm">
                                As one of the PPTKIS in the field of labor in Indonesia and abroad, PT Dian Yogya Perdana
                                prioritizes the quality, protection and professionalism of the workforce. And remember to
                                develop potential TKI in accordance with Indonesian law as outlined in the 1945 Constitution
                                and
                                Law No. 39 of 2004 to protect the whole nation and homeland Indonesia, promote public
                                welfare,
                                education national life and strive for the establishment and effective work ethic. to lead a
                                just and prosperous life.
                            </p>
                        </div>
                    </div>

                    <!-- Kolom Kanan: Mission (Bisa memanjang ke bawah tanpa merusak gambar kiri) -->
                    <div class="space-y-6">
                        <h2 class="text-4xl font-extrabold tracking-tight mb-8">
                            Mission
                        </h2>

                        <!-- Container List Misi dengan Garis Vertikal Tengah -->
                        <div class="relative border-l-4 border-white ml-6 pl-8 space-y-6">
                            <!-- Item 1 -->
                            <div class="relative flex items-center">
                                <div
                                    class="absolute -left-[50px] bg-blue-950 px-2 text-xl font-black text-white w-8 text-right">
                                    1.</div>
                                <div class="bg-white text-slate-900 px-6 py-4 rounded-2xl w-full shadow-md">
                                    <p class="font-medium text-sm md:text-base">Protect workers according to the rules of
                                        both countries</p>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="relative flex items-center">
                                <div
                                    class="absolute -left-[50px] bg-blue-950 px-2 text-xl font-black text-white w-8 text-right">
                                    2.</div>
                                <div class="bg-white text-slate-900 px-6 py-4 rounded-2xl w-full shadow-md">
                                    <p class="font-medium text-sm md:text-base">Expanding market opportunities for placement
                                        of Indonesian migrant workers</p>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="relative flex items-center">
                                <div
                                    class="absolute -left-[50px] bg-blue-950 px-2 text-xl font-black text-white w-8 text-right">
                                    3.</div>
                                <div class="bg-white text-slate-900 px-6 py-4 rounded-2xl w-full shadow-md">
                                    <p class="font-medium text-sm md:text-base">Protect workers according to the rules of
                                        both countries</p>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="relative flex items-center">
                                <div
                                    class="absolute -left-[50px] bg-blue-950 px-2 text-xl font-black text-white w-8 text-right">
                                    4.</div>
                                <div class="bg-white text-slate-900 px-6 py-4 rounded-2xl w-full shadow-md">
                                    <p class="font-medium text-sm md:text-base">Improving human resources service
                                        facilities, quality and productivity</p>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="relative flex items-center">
                                <div
                                    class="absolute -left-[50px] bg-blue-950 px-2 text-xl font-black text-white w-8 text-right">
                                    5.</div>
                                <div class="bg-white text-slate-900 px-6 py-4 rounded-2xl w-full shadow-md">
                                    <p class="font-medium text-sm md:text-base">Improve the quality of industrial
                                        development, labor inspection and regulation</p>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="relative flex items-center">
                                <div
                                    class="absolute -left-[50px] bg-blue-950 px-2 text-xl font-black text-white w-8 text-right">
                                    6.</div>
                                <div class="bg-white text-slate-900 px-6 py-4 rounded-2xl w-full shadow-md">
                                    <p class="font-medium text-sm md:text-base">Resources and public services</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class=" container mx-auto px-6 pb-6 pt-10">

            <div id="team-splide"
                class="splide max-w-6xl mx-auto border-2 border-blue-800 rounded-2xl bg-[#0e316f] p-6 md:p-8 relative pt-12">

                <div
                    class="absolute -top-10 left-6 bg-[#0e316f] text-white px-6 py-2 rounded-xl border border-blue-800 shadow-md">
                    <h2 class="text-xl font-bold tracking-wide">Our Team</h2>
                    <p class="text-[10px] text-gray-300 tracking-widest uppercase font-semibold">Board of Management</p>
                </div>

                <div class="splide__track">
                    <ul class="splide__list">

                        {{-- Perulangan Employee --}}
                        @foreach ($employees as $employee)
                            <li class="splide__slide p-2">
                                <div
                                    class="bg-white rounded-xl overflow-hidden shadow-lg border border-gray-200 flex flex-col h-full">
                                    <div class="relative bg-gray-100 flex-grow aspect-[3/4]">
                                        <img loading="lazy" decoding="async" src="{{ $employee['image'] }}" alt="Ciptadi, SE"
                                            class="w-full h-full object-cover object-top filter grayscale-[20%] font-medium">
                                    </div>
                                    <div class="p-4 bg-white">
                                        <h3 class="text-gray-900 font-bold text-lg leading-tight">{{ $employee['name'] }}
                                        </h3>
                                        <p class="text-blue-900 text-sm font-medium mt-1">{{ $employee['position'] }}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <x-contact-section />

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#team-splide', {
                // type: 'loop',
                perPage: 5,
                gap: '0.1rem',
                pagination: false,
                arrows: false,

                // Mengaktifkan fitur auto slide patah-patah bawaan Splide
                autoplay: true,
                interval: 3000, // Jeda waktu diam sebelum pindah slide (3 detik)
                speed: 800, // Durasi/kecepatan transisi pas bergeser (0.8 detik)
                pauseOnHover: true, // Slide bakal berhenti jalan kalau cursor mouse di atasnya

                breakpoints: {
                    1024: {
                        perPage: 3,
                    },
                    768: {
                        perPage: 2,
                    },
                    480: {
                        perPage: 1,
                    }
                }
            }).mount(); // Ekstensi .Extensions dihapus karena sudah pakai autoplay bawaan core
        });
    </script>
@endsection
