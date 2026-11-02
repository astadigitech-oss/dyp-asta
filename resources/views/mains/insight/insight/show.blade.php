@extends('layouts.layout')

@section('title', $article['name'] . ' - PT Dian Yogya Perdana')
@section('description', $article['excerpt'])
@section('og_image', $article['image'])

@section('content')
    <section class="relative"
        style="background-image: url('{{ asset('storage/bases/bg1.webp') }}');
               background-repeat: repeat;
               background-size: auto;">

        <div class="absolute inset-0 w-full h-full bg-blue-950/20 z-0"></div>

        <div class="relative z-10 container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

                <main class="lg:col-span-3 bg-white p-6 sm:p-8 rounded-2xl border border-slate-100 shadow-sm space-y-6">

                    <nav class="text-sm text-gray-500 pb-2 border-b border-slate-100">
                        <a href="{{ route('insight.index') }}" class="hover:text-blue-600 transition">Insights</a>
                        <span class="mx-2">/</span>
                        <a href="{{ route('insight.index', ['category' => $article['category_slug']]) }}"
                            class="hover:text-blue-600 transition">{{ $article['category'] }}</a>
                        <span class="mx-2">/</span>
                        <span class="text-gray-800 font-medium truncate">{{ $article['name'] }}</span>
                    </nav>

                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="px-3 py-1 text-xs font-semibold text-blue-600 bg-blue-50 rounded-full">
                                {{ $article['category'] }}
                            </span>
                            <span class="text-xs text-gray-400">•</span>
                            <span class="text-xs text-gray-500">
                                {{ \Carbon\Carbon::parse($article['date'])->format('d M Y') }}
                            </span>
                        </div>

                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900 leading-tight">
                            {{ $article['name'] }}
                        </h1>
                    </div>

                    <div class="overflow-hidden rounded-xl border border-slate-100">
                        <img src="{{ $article['image'] }}" alt="{{ $article['name'] }}" fetchpriority="high"
                            class="w-full h-[300px] sm:h-[420px] object-cover" />
                    </div>

                    {{-- Isi artikel berupa HTML dari editor di admin --}}
                    <article
                        class="max-w-none text-slate-600 leading-relaxed pt-2 [&_p]:mb-4 [&_h2]:text-2xl [&_h2]:font-bold [&_h2]:text-slate-900 [&_h2]:mt-6 [&_h2]:mb-3 [&_h3]:text-xl [&_h3]:font-bold [&_h3]:text-slate-900 [&_h3]:mt-5 [&_h3]:mb-2 [&_ul]:list-disc [&_ul]:pl-6 [&_ul]:mb-4 [&_ol]:list-decimal [&_ol]:pl-6 [&_ol]:mb-4 [&_a]:text-blue-600 [&_a]:underline [&_blockquote]:p-4 [&_blockquote]:my-6 [&_blockquote]:border-l-4 [&_blockquote]:border-blue-500 [&_blockquote]:bg-blue-50/50 [&_blockquote]:italic [&_img]:rounded-xl [&_img]:my-4">
                        {!! $article['description'] !!}
                    </article>

                    <div class="pt-6 border-t border-slate-100">
                        <a href="{{ route('insight.index') }}"
                            class="inline-flex items-center gap-2 text-sm font-medium text-slate-600 hover:text-blue-600 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Kembali ke Insights
                        </a>
                    </div>
                </main>

                <aside class="lg:col-span-1 space-y-8">

                    <div class="p-6 bg-white rounded-2xl border border-slate-100 shadow-sm space-y-4">
                        <h3 class="text-lg font-bold text-slate-900 border-b border-slate-100 pb-3">
                            Kategori
                        </h3>
                        <ul class="space-y-2">
                            @foreach ($article['categories'] as $category)
                                @php($isActive = $category['slug'] === $article['category_slug'])
                                <li>
                                    <a href="{{ route('insight.index', ['category' => $category['slug']]) }}#categories"
                                        class="flex items-center justify-between px-3 py-2 rounded-xl text-sm transition font-medium {{ $isActive ? 'bg-blue-600 text-white' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600' }}">
                                        <span>{{ $category['name'] }}</span>
                                        <span
                                            class="text-xs px-2 py-0.5 rounded-full {{ $isActive ? 'bg-white/20 text-white' : 'bg-slate-100 text-slate-500' }}">
                                            {{ $category['count'] }}
                                        </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    @if (!empty($article['related']))
                        <div class="p-6 bg-white rounded-2xl border border-slate-100 shadow-sm space-y-4">
                            <h3 class="text-lg font-bold text-slate-900 border-b border-slate-100 pb-3">
                                Artikel Terkait
                            </h3>
                            <div class="space-y-4">
                                @foreach ($article['related'] as $related)
                                    <a href="{{ route('insight.show', $related['slug']) }}" class="group block space-y-1">
                                        <span class="text-xs font-medium text-blue-600">{{ $related['category'] }}</span>
                                        <h4
                                            class="text-sm font-semibold text-slate-800 group-hover:text-blue-600 transition line-clamp-2">
                                            {{ $related['name'] }}
                                        </h4>
                                        <p class="text-xs text-slate-400">
                                            {{ \Carbon\Carbon::parse($related['date'])->format('d M Y') }}
                                        </p>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                </aside>

            </div>
        </div>
    </section>
@endsection
