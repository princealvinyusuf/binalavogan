@extends('layouts.app')

@section('title', $article['title'] . ' | Berita Pemagangan')
@section('meta_description', 'Siaran pers dan berita resmi Program Pemagangan Nasional.')

@section('page_header')
    <div>
        <p class="text-xs font-semibold tracking-wide text-sky-800 uppercase mb-1">
            Berita &amp; Siaran Pers
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            {{ $article['title'] }}
        </h1>
        <p class="mt-2 text-sm text-slate-700">
            {{ \Illuminate\Support\Carbon::parse($article['date'])->translatedFormat('d M Y') }} • {{ $article['category'] }}
        </p>
    </div>
@endsection

@section('content')
    <article class="prose prose-sm max-w-none">
        <p>
            {{ $article['content'] }}
        </p>
        <p>
            Konten lengkap siaran pers akan dikelola melalui modul manajemen berita, dengan opsi
            unduhan file siaran pers (PDF) untuk media dan publik.
        </p>
    </article>
@endsection


