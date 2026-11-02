@extends('layouts.layout')
@section('title', 'Legality - PT Dian Yogya Perdana')
@section('description', 'Business licenses and legal documents of PT Dian Yogya Perdana as an official Indonesian employment agency.')

@section('content')
    <section class="py-10 bg-white">
        <div class="container mx-auto px-6 py-12">

            <div class="grid lg:grid-cols-2 gap-14 items-start">

                {{-- LEFT --}}
                <div>

                    <h2 class="text-4xl font-bold text-[#08145A] mb-12">
                        Legality
                    </h2>

                    <div class="space-y-6">

                        @php
                            $items = [
                                'Protect workers according to the rules of both countries',
                                'Expanding market opportunities for placement of Indonesian migrant workers',
                                'Protect workers according to the rules of both countries',
                                'Improving human resources service facilities, quality and productivity',
                                'Improve the quality of industrial development, labor inspection and regulation',
                                'Resources and public services',
                            ];
                        @endphp

                        @foreach ($items as $index => $item)
                            <div class="flex items-center">

                                {{-- Number --}}
                                <div class="w-12 text-xl font-bold text-[#08145A]">
                                    {{ $index + 1 }}.
                                </div>

                                {{-- Card --}}
                                <div class="flex-1 relative">

                                    {{-- Line --}}
                                    @if (!$loop->last)
                                        <div class="absolute left-8 top-full w-1 h-8 bg-[#08145A]"></div>
                                    @endif

                                    <div
                                        class="bg-[#08145A] text-white rounded-[28px] px-8 py-6 text-lg leading-relaxed shadow">

                                        {{ $item }}

                                    </div>

                                </div>

                            </div>
                        @endforeach

                    </div>

                </div>

                {{-- RIGHT --}}
                <div>

                    <div class="grid lg:grid-cols-2 gap-6">

                        {{-- Perulangan Legality --}}
                        @foreach ($legalities as $legality)
                            <img loading="lazy" decoding="async" src="{{ $legality['image'] }}" class="w-full shadow rounded">
                        @endforeach

                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
