@extends('layouts.app')

@section('title', $document['title'] . ' | Dokumen Pemagangan')
@section('meta_description', 'Dokumen resmi terkait Program Pemagangan Nasional.')

@section('page_header')
    <div class="space-y-3">
        <p class="text-[11px] font-semibold tracking-[0.25em] uppercase text-cyan-700">
            Dokumen Program Pemagangan Nasional
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            {{ $document['title'] }}
        </h1>
    </div>
@endsection

@section('content')
    <div class="rounded-3xl bg-white border border-slate-100 p-6 shadow-sm space-y-4 text-sm">
        <p class="text-slate-700">
            {{ $document['description'] }}
        </p>
        <p class="text-xs text-slate-500">
            Pada implementasi penuh, halaman ini akan menampilkan tautan unduhan langsung dan/atau pratinjau dokumen yang disimpan
            di penyimpanan terproteksi (misalnya storage Laravel atau sistem dokumen pemerintah).
        </p>

        <a href="{{ $document['file_url'] }}"
           class="inline-flex items-center rounded-full bg-sky-900 text-white text-sm font-semibold px-5 py-2 shadow hover:bg-sky-800">
            Unduh Dokumen
        </a>
    </div>
@endsection


