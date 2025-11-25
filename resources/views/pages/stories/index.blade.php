@extends('layouts.app')

@section('title', 'Cerita Sukses Program Pemagangan Nasional')
@section('meta_description', 'Testimoni alumni dan cerita sukses Program Pemagangan Nasional dari berbagai sektor industri.')

@section('page_header')
    <div class="space-y-3">
        <p class="text-[11px] font-semibold tracking-[0.25em] uppercase text-cyan-700">
            Cerita Sukses &amp; Testimoni
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            Cerita Sukses Peserta &amp; Industri Mitra
        </h1>
        <p class="text-sm text-slate-700 max-w-3xl">
            Kumpulan pengalaman alumni dan praktik baik dari industri mitra yang berpartisipasi dalam Program Pemagangan Nasional.
        </p>
    </div>
@endsection

@section('content')
    <div class="grid gap-6 md:grid-cols-2">
        @forelse($stories as $story)
            <article class="rounded-3xl bg-white border border-slate-100 p-6 shadow-sm text-sm">
                <p class="text-xs font-semibold text-slate-400 uppercase tracking-[0.3em] mb-2">
                    {{ $story['industry'] }} • {{ $story['year'] }}
                </p>
                <h2 class="text-lg font-semibold text-slate-900 mb-2">
                    <a href="{{ route('stories.show', $story['slug']) }}" class="hover:text-sky-800">
                        {{ $story['title'] }}
                    </a>
                </h2>
                <p class="text-slate-600 mb-4">
                    {{ $story['excerpt'] }}
                </p>
                <a href="{{ route('stories.show', $story['slug']) }}" class="inline-flex items-center text-xs font-semibold text-sky-900">
                    Baca selengkapnya
                    <span class="ml-2" aria-hidden="true">↗</span>
                </a>
            </article>
        @empty
            <p class="text-sm text-slate-600">
                Cerita sukses akan segera dipublikasikan.
            </p>
        @endforelse
    </div>
@endsection


