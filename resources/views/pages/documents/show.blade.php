@extends('layouts.app')

@section('title', $document['title'] . ' | Dokumen Pemagangan')
@section('meta_description', 'Dokumen resmi terkait Program Pemagangan Nasional.')

@section('page_header')
    <div>
        <p class="text-xs font-semibold tracking-wide text-sky-800 uppercase mb-1">
            Dokumen Program Pemagangan Nasional
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            {{ $document['title'] }}
        </h1>
    </div>
@endsection

@section('content')
    <div class="space-y-4 text-sm">
        <p class="text-slate-700">
            {{ $document['description'] }}
        </p>
        <p class="text-xs text-slate-600">
            Pada implementasi penuh, halaman ini akan menampilkan tautan unduhan langsung dan/atau
            pratinjau dokumen yang disimpan di penyimpanan terproteksi (misalnya storage Laravel atau
            sistem dokumen pemerintah).
        </p>

        <a href="{{ $document['file_url'] }}"
           class="inline-flex items-center px-4 py-2 rounded text-sm font-semibold text-white bg-sky-800 hover:bg-sky-900">
            Unduh Dokumen
        </a>
    </div>
@endsection


