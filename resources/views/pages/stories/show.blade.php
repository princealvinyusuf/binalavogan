@extends('layouts.public')

@section('title', $story['title'] . ' | Cerita Sukses')
@section('meta_description', 'Cerita sukses peserta Program Pemagangan Nasional.')

@section('page_header')
    <div class="space-y-3">
        <p class="text-[11px] font-semibold tracking-[0.25em] uppercase text-cyan-700">
            Cerita Sukses Peserta
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            {{ $story['title'] }}
        </h1>
        <p class="text-sm text-slate-700">
            {{ $story['industry'] }} • {{ $story['year'] }}
        </p>
    </div>
@endsection

@section('content')
    <article class="prose prose-sm max-w-none rounded-3xl bg-white border border-slate-100 p-6 shadow-sm">
        <p>
            {{ $story['content'] }}
        </p>
        <p>
            Konten lengkap cerita sukses akan dikembangkan lebih lanjut dan dikelola melalui modul
            manajemen konten atau integrasi dengan sistem dokumentasi/press Kemnaker.
        </p>
    </article>
@endsection


