@extends('layouts.app')

@section('title', 'Dokumen & Unduhan Program Pemagangan Nasional')
@section('meta_description', 'Pusat dokumen Program Pemagangan Nasional: pedoman, SOP, regulasi, dan template kerja sama.')

@section('page_header')
    <div>
        <p class="text-xs font-semibold tracking-wide text-sky-800 uppercase mb-1">
            Dokumen &amp; Pusat Unduhan
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            Dokumen Resmi Program Pemagangan Nasional
        </h1>
        <p class="mt-2 text-sm text-slate-700 max-w-3xl">
            Akses pedoman, SOP, regulasi, serta template kerja sama yang digunakan dalam pelaksanaan
            Program Pemagangan Nasional di seluruh Indonesia.
        </p>
    </div>
@endsection

@section('content')
    <div class="space-y-6">
        @foreach($categories as $category => $docs)
            <section>
                <h2 class="text-sm font-semibold text-slate-900 mb-2">{{ $category }}</h2>
                <ul class="divide-y divide-slate-200 rounded-lg border border-slate-200 bg-white text-sm">
                    @foreach($docs as $doc)
                        <li class="px-4 py-3 flex items-center justify-between gap-3">
                            <div>
                                <p class="font-semibold text-slate-900">
                                    <a href="{{ route('documents.show', $doc['slug']) }}" class="hover:text-sky-800">
                                        {{ $doc['title'] }}
                                    </a>
                                </p>
                                <p class="text-xs text-slate-600">
                                    Format: {{ $doc['type'] }}
                                </p>
                            </div>
                            <a href="{{ route('documents.show', $doc['slug']) }}"
                               class="inline-flex items-center px-3 py-1.5 rounded text-xs font-semibold text-slate-800 border border-slate-300 bg-slate-50 hover:bg-slate-100">
                                Lihat / Unduh
                            </a>
                        </li>
                    @endforeach
                </ul>
            </section>
        @endforeach
    </div>
@endsection


