@extends('layouts.app')

@section('title', 'Cerita Sukses Program Pemagangan Nasional')
@section('meta_description', 'Testimoni alumni dan cerita sukses Program Pemagangan Nasional dari berbagai sektor industri.')

@section('page_header')
    <div>
        <p class="text-xs font-semibold tracking-wide text-sky-800 uppercase mb-1">
            Cerita Sukses &amp; Testimoni
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            Cerita Sukses Peserta &amp; Industri Mitra
        </h1>
        <p class="mt-2 text-sm text-slate-700 max-w-3xl">
            Kumpulan pengalaman alumni dan praktik baik dari industri mitra yang berpartisipasi dalam
            Program Pemagangan Nasional.
        </p>
    </div>
@endsection

@section('content')
    <div class="grid gap-6 md:grid-cols-2">
        @forelse($stories as $story)
            <article class="rounded-lg border border-slate-200 bg-white p-4 text-sm">
                <h2 class="text-base font-semibold text-slate-900 mb-1">
                    <a href="{{ route('stories.show', $story['slug']) }}" class="hover:text-sky-800">
                        {{ $story['title'] }}
                    </a>
                </h2>
                <p class="text-xs text-slate-600 mb-2">
                    {{ $story['industry'] }} • {{ $story['year'] }}
                </p>
                <p class="text-slate-700 mb-3">
                    {{ $story['excerpt'] }}
                </p>
                <a href="{{ route('stories.show', $story['slug']) }}" class="inline-flex items-center text-xs font-semibold text-sky-800 hover:text-sky-900">
                    Baca selengkapnya
                    <span class="ml-1" aria-hidden="true">→</span>
                </a>
            </article>
        @empty
            <p class="text-sm text-slate-600">
                Cerita sukses akan segera dipublikasikan.
            </p>
        @endforelse
    </div>
@endsection


