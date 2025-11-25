@extends('layouts.app')

@section('title', 'Program Pemagangan Nasional | Beranda')
@section('meta_description', 'Beranda resmi Program Pemagangan Nasional di bawah Direktorat BINALAVOGAN, Ditjen Binalavotas, Kemnaker RI.')

@section('page_header')
    <div class="grid gap-6 md:grid-cols-2 items-center">
        <div>
            <p class="text-xs font-semibold tracking-wide text-sky-800 uppercase mb-2">
                Program Pemagangan Nasional
            </p>
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-semibold text-slate-900 leading-snug">
                Meningkatkan kompetensi kerja melalui pemagangan yang terstruktur dan inklusif.
            </h1>
            <p class="mt-3 text-sm text-slate-700 max-w-xl">
                Direktorat Bina Penyelenggaraan Pelatihan Vokasi dan Pemagangan (BINALAVOGAN)
                memfasilitasi kolaborasi antara dunia usaha, dunia industri, dan pencari kerja
                untuk memperkuat daya saing tenaga kerja Indonesia.
            </p>
            <div class="mt-5 flex flex-wrap gap-3">
                <a href="{{ route('registration.index') }}#peserta"
                   class="inline-flex items-center px-4 py-2 rounded text-sm font-semibold text-white bg-sky-800 hover:bg-sky-900">
                    Daftar Peserta
                </a>
                <a href="{{ route('registration.index') }}#industri"
                   class="inline-flex items-center px-4 py-2 rounded text-sm font-semibold text-sky-800 border border-sky-200 bg-white hover:bg-sky-50">
                    Daftar Industri
                </a>
            </div>
        </div>
        <div class="bg-sky-50 border border-sky-100 rounded-lg p-4 md:p-6">
            <h2 class="text-sm font-semibold text-slate-900 flex items-center justify-between">
                Informasi Pendaftaran Batch Terbaru
                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[11px] font-semibold bg-emerald-100 text-emerald-900">
                    {{ $latestBatch['status'] ?? 'Informasi' }}
                </span>
            </h2>
            <dl class="mt-3 grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm">
                <div>
                    <dt class="text-slate-600">Nama Batch</dt>
                    <dd class="font-semibold text-slate-900">{{ $latestBatch['name'] ?? 'Batch Nasional' }}</dd>
                </div>
                <div>
                    <dt class="text-slate-600">Periode</dt>
                    <dd class="font-semibold text-slate-900">{{ $latestBatch['period'] ?? '-' }}</dd>
                </div>
            </dl>
            <div class="mt-4">
                <a href="{{ $latestBatch['registration_url'] ?? route('registration.index') }}"
                   class="inline-flex items-center text-sm font-semibold text-sky-800 hover:text-sky-900">
                    Lihat detail pendaftaran
                    <span class="ml-1" aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    {{-- Quick actions --}}
    <section aria-labelledby="quick-access-heading">
        <div class="flex items-center justify-between mb-3">
            <h2 id="quick-access-heading" class="text-sm font-semibold text-slate-900">
                Akses cepat
            </h2>
        </div>
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <a href="{{ route('registration.index') }}#peserta" class="group rounded-lg border border-slate-200 bg-white p-4 hover:border-sky-300 focus:outline-none focus:ring-2 focus:ring-sky-500">
                <p class="text-xs font-semibold text-sky-800 mb-1">Pendaftaran Peserta</p>
                <p class="text-sm text-slate-700">Lihat persyaratan dan alur pendaftaran peserta Program Pemagangan Nasional.</p>
            </a>
            <a href="{{ route('registration.index') }}#industri" class="group rounded-lg border border-slate-200 bg-white p-4 hover:border-sky-300 focus:outline-none focus:ring-2 focus:ring-sky-500">
                <p class="text-xs font-semibold text-sky-800 mb-1">Pendaftaran Industri</p>
                <p class="text-sm text-slate-700">Ajukan minat menjadi perusahaan/BLK/LPK penyelenggara pemagangan.</p>
            </a>
            <a href="{{ route('statistics.public') }}" class="group rounded-lg border border-slate-200 bg-white p-4 hover:border-sky-300 focus:outline-none focus:ring-2 focus:ring-sky-500">
                <p class="text-xs font-semibold text-sky-800 mb-1">Lihat Statistik</p>
                <p class="text-sm text-slate-700">Pantau sebaran peserta, sektor industri, dan capaian penempatan kerja.</p>
            </a>
            <a href="{{ route('documents.index') }}" class="group rounded-lg border border-slate-200 bg-white p-4 hover:border-sky-300 focus:outline-none focus:ring-2 focus:ring-sky-500">
                <p class="text-xs font-semibold text-sky-800 mb-1">Pedoman &amp; Regulasi</p>
                <p class="text-sm text-slate-700">Unduh pedoman, SOP, SK, dan regulasi terkait pemagangan nasional.</p>
            </a>
        </div>
    </section>

    {{-- Highlight statistics --}}
    <section class="mt-8 border-t border-slate-200 pt-6" aria-labelledby="stats-heading">
        <div class="flex items-center justify-between mb-3">
            <h2 id="stats-heading" class="text-sm font-semibold text-slate-900">
                Ringkasan capaian Program Pemagangan Nasional
            </h2>
        </div>
        <dl class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($quickStats as $stat)
                <div class="rounded-lg bg-white border border-slate-200 p-4">
                    <dt class="text-xs text-slate-600">{{ $stat['label'] }}</dt>
                    <dd class="mt-2 text-xl font-semibold text-slate-900">
                        {{ $stat['value'] }}
                    </dd>
                </div>
            @endforeach
        </dl>
    </section>

    {{-- Stories & news teasers (placeholder) --}}
    <section class="mt-8 grid gap-8 lg:grid-cols-2">
        <div>
            <h2 class="text-sm font-semibold text-slate-900 mb-3">Cerita sukses peserta</h2>
            <p class="text-sm text-slate-700 mb-3">
                Baca bagaimana Program Pemagangan Nasional membantu alumni memasuki dunia kerja dan
                meningkatkan keterampilan vokasi di berbagai sektor industri.
            </p>
            <a href="{{ route('stories.index') }}" class="inline-flex items-center text-sm font-semibold text-sky-800 hover:text-sky-900">
                Lihat cerita sukses
                <span class="ml-1" aria-hidden="true">→</span>
            </a>
        </div>
        <div>
            <h2 class="text-sm font-semibold text-slate-900 mb-3">Siaran pers &amp; berita terbaru</h2>
            <p class="text-sm text-slate-700 mb-3">
                Ikuti perkembangan kebijakan pemagangan, kolaborasi dengan industri, dan agenda nasional
                terkait peningkatan kompetensi tenaga kerja.
            </p>
            <a href="{{ route('news.index') }}" class="inline-flex items-center text-sm font-semibold text-sky-800 hover:text-sky-900">
                Buka ruang berita
                <span class="ml-1" aria-hidden="true">→</span>
            </a>
        </div>
    </section>
@endsection


