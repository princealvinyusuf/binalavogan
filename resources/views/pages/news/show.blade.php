@extends('layouts.app')

@section('title', $article['title'] . ' | Berita Pemagangan')
@section('meta_description', 'Siaran pers dan berita resmi Program Pemagangan Nasional.')

@section('page_header')
    <div class="space-y-3">
        <p class="text-[11px] font-semibold tracking-[0.25em] uppercase text-cyan-700">
            Berita &amp; Siaran Pers
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            {{ $article['title'] }}
        </h1>
        <p class="text-sm text-slate-700">
            {{ \Illuminate\Support\Carbon::parse($article['date'])->translatedFormat('d M Y') }} • {{ $article['category'] }}
        </p>
    </div>
@endsection

@section('content')
    <article class="prose prose-sm max-w-none rounded-3xl bg-white border border-slate-100 p-6 shadow-sm">
        <p>
            {{ $article['content'] }}
        </p>
        <p>
            Konten lengkap siaran pers akan dikelola melalui modul manajemen berita, dengan opsi unduhan file siaran pers (PDF) untuk media dan publik.
        </p>
    </article>
@endsection


