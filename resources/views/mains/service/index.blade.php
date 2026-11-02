@extends('layouts.layout')
@section('title', 'Services - PT Dian Yogya Perdana')
@section('description', 'Recruitment and overseas placement services by PT Dian Yogya Perdana: fast, appropriate, safe and transparent.')

@section('content')
    <section class="py-10"
        style="background-image: url('{{ asset('storage/bases/bg1.webp') }}'); background-size: cover; background-position: center;">
        <div class="container mx-auto px-6 py-12">

            {{-- Heading --}}
            <div class="max-w-3xl mx-auto text-center mb-14">
                <h2 class="text-5xl font-bold text-[#08145A] mb-5">
                    Services
                </h2>

                <p class="text-lg text-gray-600 leading-8">
                    We deliver comprehensive services to ensure effective recruitment,
                    employee development, and productivity optimization,
                    meeting the needs of employers and employees alike.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">

                @foreach ($services as $service)
                    <a href="{{ route('service.show', $service['slug']) }}"
                        class="bg-white rounded-xl shadow-lg overflow-hidden transition duration-300 hover:-translate-y-2 hover:shadow-2xl">

                        {{-- Image --}}
                        <div class="relative h-40">

                            <img loading="lazy" decoding="async" src="{{ $service['image'] }}" class="w-full h-full object-cover">

                            <div class="absolute inset-0 bg-black/45"></div>

                            <div class="absolute inset-0 flex items-center justify-center px-6">

                                <h3 class="text-white text-4xl font-bold text-center leading-tight">
                                    {{ $service['name'] }}
                                </h3>

                            </div>

                        </div>

                        {{-- Content --}}
                        <div class="relative px-5 py-3">

                            {{-- White Tab --}}
                            <div class="absolute -top-5 left-1/2 -translate-x-1/2 w-44 h-10 bg-white rounded-t-xl">
                            </div>

                            <p class="relative text-gray-700 text-sm leading-6 text-justify">
                                {{ $service['description'] }}
                            </p>

                        </div>

                    </a>
                @endforeach

            </div>

        </div>
    </section>
@endsection
