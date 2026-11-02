    {{-- Contact --}}
    <section class="w-full bg-transparent py-20 font-sans"
        style="background-image: url('{{ asset('storage/bases/bg1.webp') }}'); background-size: cover; background-position: center;">
        <div class="container mx-auto p-6">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

                <div class="lg:col-span-5 p-10 rounded-[32px] shadow-lg"
                    style="background: linear-gradient(135deg, #0e1140 0%, #611829 100%);">

                    <h2 class="text-white text-3xl font-extrabold mb-2">Send us a message!</h2>
                    <p class="text-slate-200 text-base mb-8">If you have any question</p>

                    <form id="contact-form" action="{{ route('contact.send') }}" method="POST" class="scroll-mt-24 flex flex-col gap-5">
                        @csrf
                <x-form-feedback />

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="flex flex-col gap-2">
                                <label class="text-white text-sm font-semibold">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" required
                                    class="w-full bg-transparent border-2 border-white/60 rounded-xl px-4 py-3 text-white text-base outline-none focus:border-white transition">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-white text-sm font-semibold">Company</label>
                                <input type="text" name="company" value="{{ old('company') }}"
                                    class="w-full bg-transparent border-2 border-white/60 rounded-xl px-4 py-3 text-white text-base outline-none focus:border-white transition">
                            </div>
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="text-white text-sm font-semibold">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" required
                                class="w-full bg-transparent border-2 border-white/60 rounded-xl px-4 py-3 text-white text-base outline-none focus:border-white transition">
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="text-white text-sm font-semibold">Subject</label>
                            <input type="text" name="subject" value="{{ old('subject') }}" required
                                class="w-full bg-transparent border-2 border-white/60 rounded-xl px-4 py-3 text-white text-base outline-none focus:border-white transition">
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="text-white text-sm font-semibold">Message</label>
                            <textarea name="message" rows="5" required
                                class="w-full bg-transparent border-2 border-white/60 rounded-xl px-4 py-3 text-white text-base outline-none resize-y focus:border-white transition">{{ old('message') }}</textarea>
                        </div>

                        <div class="flex justify-center mt-3">
                            <button type="submit"
                                class="bg-white text-[#0e1140] border-none rounded-xl px-8 py-3.5 text-base font-bold cursor-pointer hover:bg-opacity-90 transition">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <div class="lg:col-span-7 flex flex-col gap-10">

                    <div>
                        <h2 class="text-[#00145E] text-3xl font-extrabold mb-4">Location</h2>
                        <p class="text-gray-600 text-base leading-relaxed mb-6">
                            Jl. Ringroad Selatan No.1, Glugo, Panggungharjo, Kec. Sewon, Kabupaten Bantul, Daerah
                            Istimewa Yogyakarta 55188
                        </p>
                        <div class="w-full h-[260px] rounded-2xl overflow-hidden border border-gray-200">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7905.153332504162!2d110.363194!3d-7.834548!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57b3a9401d4f%3A0xe368a22df2503349!2sJl.%20Ringroad%20Selatan%20No.1%2C%20Glugo%2C%20Panggungharjo%2C%20Kec.%20Sewon%2C%20Kabupaten%20Bantul%2C%20Daerah%20Istimewa%20Yogyakarta%2055188!5e0!3m2!1sid!2sid!4v1782055956088!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-[#00145E] text-3xl font-extrabold mb-5">Contact Us</h2>
                        <div class="flex flex-wrap gap-x-10 gap-y-6">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-11 h-11 bg-[#00145E] rounded-full flex items-center justify-center text-white">
                                    <i data-lucide="phone" class="w-5 h-5"></i>
                                </div>
                                <div class="text-[#00145E] font-bold text-base leading-snug">
                                    <div>(+62) 856-0200-1555</div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-11 h-11 bg-[#00145E] rounded-full flex items-center justify-center text-white">
                                    <i data-lucide="mail" class="w-5 h-5"></i>
                                </div>
                                <a href="mailto:dianyogyaperdana@yahoo.com"
                                    class="text-[#00145E] font-bold text-base hover:underline">
                                    dianyogyaperdana@yahoo.com
                                </a>
                            </div>
                        </div>
                    </div>

                    @if (config('navigation.social.linkedin'))
                        <div>
                            <h2 class="text-[#00145E] text-3xl font-extrabold mb-4">Social Media</h2>
                            <div class="flex gap-3">
                                <a href="{{ config('navigation.social.linkedin') }}" target="_blank" rel="noopener"
                                    aria-label="LinkedIn PT Dian Yogya Perdana"
                                    class="px-2 py-3 bg-[#00145E] rounded-t-xl flex items-center justify-center text-white">
                                    <i class="fa-brands fa-linkedin text-[20px]"></i>
                                </a>
                            </div>
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </section>
