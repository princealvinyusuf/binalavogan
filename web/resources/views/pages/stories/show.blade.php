@extends('layouts.app')

@section('title', $story['title'] . ' | Cerita Sukses')
@section('meta_description', 'Cerita sukses peserta Program Pemagangan Nasional.')

@section('page_header')
    <div>
        <p class="text-xs font-semibold tracking-wide text-sky-800 uppercase mb-1">
            Cerita Sukses Peserta
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            {{ $story['title'] }}
        </h1>
        <p class="mt-2 text-sm text-slate-700">
            {{ $story['industry'] }} • {{ $story['year'] }}
        </p>
    </div>
@endsection

@section('content')
    <article class="prose prose-sm max-w-none">
        <p>
            {{ $story['content'] }}
        </p>
        <p>
            Konten lengkap cerita sukses akan dikembangkan lebih lanjut dan dikelola melalui modul
            manajemen konten atau integrasi dengan sistem dokumentasi/press Kemnaker.
        </p>
    </article>
@endsection


