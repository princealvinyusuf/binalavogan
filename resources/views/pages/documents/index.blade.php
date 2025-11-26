@extends('layouts.public')

@section('title', 'Dokumen & Unduhan Program Pemagangan Nasional')
@section('meta_description', 'Pusat dokumen Program Pemagangan Nasional: pedoman, SOP, regulasi, dan template kerja sama.')

@section('page_header')
    <div class="space-y-3">
        <p class="text-[11px] font-semibold tracking-[0.25em] uppercase text-cyan-700">
            Dokumen &amp; Pusat Unduhan
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            Dokumen Resmi Program Pemagangan Nasional
        </h1>
        <p class="text-sm text-slate-700 max-w-3xl">
            Akses pedoman, SOP, regulasi, serta template kerja sama yang digunakan dalam pelaksanaan Program Pemagangan Nasional.
        </p>
    </div>
@endsection

@section('content')
    <div class="space-y-6">
        @foreach($categories as $category => $docs)
            <section class="rounded-3xl bg-white border border-slate-100 shadow-sm p-5">
                <div class="flex items-center justify-between mb-3">
                    <h2 class="text-base font-semibold text-slate-900">{{ $category }}</h2>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-[0.3em]">Dokumen</span>
                </div>
                <ul class="divide-y divide-slate-100 text-sm">
                    @foreach($docs as $doc)
                        <li class="py-3 flex items-center justify-between gap-3">
                            <div>
                                <p class="font-semibold text-slate-900">
                                    <a href="{{ route('documents.show', $doc['slug']) }}" class="hover:text-sky-800">
                                        {{ $doc['title'] }}
                                    </a>
                                </p>
                                <p class="text-xs text-slate-500">
                                    Format: {{ $doc['type'] }}
                                </p>
                            </div>
                            <a href="{{ route('documents.show', $doc['slug']) }}"
                               class="inline-flex items-center rounded-full border border-slate-200 px-4 py-2 text-xs font-semibold text-slate-700 bg-slate-50 hover:bg-white">
                                Lihat / Unduh
                            </a>
                        </li>
                    @endforeach
                </ul>
            </section>
        @endforeach
    </div>
@endsection


