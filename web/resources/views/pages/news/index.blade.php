@extends('layouts.app')

@section('title', 'Berita & Siaran Pers Program Pemagangan Nasional')
@section('meta_description', 'Ruang berita dan siaran pers resmi terkait Program Pemagangan Nasional.')

@section('page_header')
    <div>
        <p class="text-xs font-semibold tracking-wide text-sky-800 uppercase mb-1">
            Ruang Berita &amp; Siaran Pers
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            Berita, Siaran Pers, dan Publikasi
        </h1>
        <p class="mt-2 text-sm text-slate-700 max-w-3xl">
            Informasi resmi terkait peluncuran batch baru, kerja sama strategis, dan kebijakan pemagangan
            nasional dari BINALAVOGAN dan Kemnaker.
        </p>
    </div>
@endsection

@section('content')
    <div class="space-y-4">
        @forelse($news as $item)
            <article class="rounded-lg border border-slate-200 bg-white p-4 text-sm flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                <div>
                    <p class="text-xs text-slate-600 mb-1">
                        {{ \Illuminate\Support\Carbon::parse($item['date'])->translatedFormat('d M Y') }} • {{ $item['category'] }}
                    </p>
                    <h2 class="text-base font-semibold text-slate-900">
                        <a href="{{ route('news.show', $item['slug']) }}" class="hover:text-sky-800">
                            {{ $item['title'] }}
                        </a>
                    </h2>
                </div>
                <div class="flex-shrink-0">
                    <a href="{{ route('news.show', $item['slug']) }}"
                       class="inline-flex items-center px-3 py-1.5 rounded text-xs font-semibold text-slate-800 border border-slate-300 bg-slate-50 hover:bg-slate-100">
                        Baca selengkapnya
                    </a>
                </div>
            </article>
        @empty
            <p class="text-sm text-slate-600">
                Berita dan siaran pers akan segera dipublikasikan.
            </p>
        @endforelse
    </div>
@endsection


