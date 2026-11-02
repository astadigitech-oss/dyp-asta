@extends('layouts.layout')

@section('title', 'Contact - PT Dian Yogya Perdana')
@section('description', 'Contact PT Dian Yogya Perdana at Jl. Ringroad Selatan No.1, Glugo, Bantul, Yogyakarta. Phone (+62) 856-0200-1555.')
@section('body_class', 'bg-gray-100')
@section('hero_class', 'min-h-screen pb-16')
@section('hero_overlay', 'bg-black/75')

@section('hero')
            <div class="container mx-auto px-6 pt-12 pb-8 text-center space-y-3">
                <h1 class="text-white font-bold leading-tight text-3xl sm:text-4xl md:text-5xl lg:text-6xl">
                    PT. Dian Yogya Perdana
                </h1>
                <h2 class="text-gray-200 font-semibold leading-tight text-lg sm:text-xl md:text-2xl">
                    Fast, Appropriate, Safe and Transparent
                </h2>
            </div>

            <div class="container mx-auto px-6 mt-6">
                <div class="border-b border-gray-400/60 pb-3 mb-8">
                    <h3 class="text-white font-bold text-3xl sm:text-4xl">
                        Contact
                    </h3>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-start">

                    <div
                        class="w-full h-[320px] sm:h-[380px] rounded-xl overflow-hidden shadow-2xl border border-white/20">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.541819777174!2d110.364312!3d-7.838202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57a40733809b%3A0xb35154ee42faeb2c!2sJl.%20Ringroad%20Selatan%20No.1%2C%20Glugo%2C%20Panggungharjo%2C%20Kec.%20Sewon%2C%20Kabupaten%20Bantul%2C%20Daerah%20Istimewa%20Yogyakarta%2055188!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid"
                            class="w-full h-full border-0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <div class="space-y-8 text-white">

                        <div class="space-y-4">
                            <h4 class="text-2xl font-bold text-white tracking-wide">
                                Main Office
                            </h4>
                            <div class="space-y-3 text-gray-200 text-sm sm:text-base">
                                <div class="flex items-start gap-3.5">
                                    <i class="fa-solid fa-location-dot text-xl text-blue-400 mt-1 shrink-0"></i>
                                    <span>
                                        Jl. Ringroad Selatan No.1, Glugo, Panggungharjo, Kec. Sewon, Kabupaten Bantul,
                                        Daerah Istimewa Yogyakarta 55188
                                    </span>
                                </div>
                                <div class="flex items-center gap-3.5">
                                    <i class="fa-solid fa-phone text-lg text-blue-400 shrink-0"></i>
                                    <span>(+62) 856-0200-1555</span>
                                </div>
                                <div class="flex items-center gap-3.5">
                                    <i class="fa-solid fa-envelope text-lg text-blue-400 shrink-0"></i>
                                    <a href="mailto:dianyogyaperdana@yahoo.com" class="hover:underline transition">
                                        dianyogyaperdana@yahoo.com
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div id="branch-office" class="space-y-4 pt-2 scroll-mt-6">
                            <h4 class="text-2xl font-bold text-white tracking-wide">
                                Branch Office
                            </h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-sm sm:text-base">
                                @foreach ($branches as $branch)
                                    <div class="border-b border-gray-400/60 pb-2">
                                        <p class="font-bold uppercase tracking-wide text-white">
                                            {{ $branch['name'] }}
                                        </p>
                                        <p class="text-gray-300 font-semibold">
                                            Cabang
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                </div>
            </div>
@endsection

@section('content')
    <section class="relative py-20 overflow-hidden bg-gradient-to-r from-slate-950 via-blue-950 to-rose-950">

        <div
            class="absolute top-1/2 left-1/4 -translate-y-1/2 w-96 h-96 bg-blue-600/10 rounded-full blur-3xl pointer-events-none">
        </div>
        <div
            class="absolute top-1/2 right-1/4 -translate-y-1/2 w-96 h-96 bg-rose-600/10 rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="relative z-10 container mx-auto px-6 max-w-4xl">

            <div class="text-center space-y-3 mb-10">
                <h3 class="text-2xl sm:text-3xl font-bold text-white tracking-wide">
                    Send Us a Message
                </h3>
                <p class="text-gray-300 text-sm sm:text-base max-w-xl mx-auto">
                    Punya pertanyaan atau ingin berkonsultasi mengenai layanan operasional kami? Silakan isi formulir di
                    bawah ini.
                </p>
            </div>

            <form id="contact-form" action="{{ route('contact.send') }}" method="POST" class="scroll-mt-24 space-y-6">
                @csrf
                <x-form-feedback />

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="name" class="block text-sm font-semibold text-white">
                            Name
                        </label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Your Name" required
                            class="w-full px-4 py-3 bg-white/5 backdrop-blur-md border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-400/20 transition duration-200">
                    </div>

                    <div class="space-y-2">
                        <label for="company" class="block text-sm font-semibold text-white">
                            Company
                        </label>
                        <input type="text" id="company" name="company" value="{{ old('company') }}" placeholder="Your Company Name"
                            class="w-full px-4 py-3 bg-white/5 backdrop-blur-md border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-400/20 transition duration-200">
                    </div>
                </div>

                <div class="space-y-2">
                    <label for="email" class="block text-sm font-semibold text-white">
                        Email
                    </label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="name@company.com" required
                        class="w-full px-4 py-3 bg-white/5 backdrop-blur-md border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-400/20 transition duration-200">
                </div>

                <div class="space-y-2">
                    <label for="subject" class="block text-sm font-semibold text-white">
                        Subject
                    </label>
                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}" placeholder="How can we help you?" required
                        class="w-full px-4 py-3 bg-white/5 backdrop-blur-md border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-400/20 transition duration-200">
                </div>

                <div class="space-y-2">
                    <label for="message" class="block text-sm font-semibold text-white">
                        Message
                    </label>
                    <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required
                        class="w-full px-4 py-3 bg-white/5 backdrop-blur-md border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-400/20 transition duration-200 resize-none">{{ old('message') }}</textarea>
                </div>

                <div class="text-center pt-4">
                    <button type="submit"
                        class="px-8 py-3.5 bg-white text-slate-900 font-bold rounded-xl shadow-lg hover:bg-gray-100 hover:shadow-white/10 active:scale-95 transition-all duration-200 cursor-pointer">
                        Send Message
                    </button>
                </div>

            </form>

        </div>
    </section>
@endsection
