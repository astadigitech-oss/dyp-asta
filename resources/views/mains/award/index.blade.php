@extends('layouts.layout')
@section('title', 'Award & Certified - PT Dian Yogya Perdana')
@section('description', 'Awards and certifications received by PT Dian Yogya Perdana as a licensed Indonesian employment agency.')

@section('content')
    <section class="py-10 bg-white"
        style="background-image: url('{{ asset('storage/bases/bg1.webp') }}'); background-size: cover; background-position: center;">

        <div class="container mx-auto px-6 py-12">
            <h2 class="text-4xl font-bold text-[#08145A] mb-12">
                Award & Certified
            </h2>

            <div class="columns-1 md:columns-2 lg:columns-3 gap-6">
                @foreach ($awards as $award)
                    <div class="mb-6 break-inside-avoid">
                        <img loading="lazy" decoding="async" src="{{ $award['image'] }}" alt="Award" class="w-full rounded-xl shadow-md">
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
