@extends('layouts.app')

@section('title', 'Program Pemagangan Nasional | Beranda')
@section('meta_description', 'Beranda resmi Program Pemagangan Nasional di bawah Direktorat BINALAVOGAN, Ditjen Binalavotas, Kemnaker RI.')

@section('page_header')
    <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-sky-900 via-sky-800 to-cyan-700 px-5 py-8 sm:px-8 sm:py-10 text-white">
        <div class="absolute inset-y-0 right-0 opacity-40 pointer-events-none">
            <div class="h-full w-64 bg-gradient-to-b from-cyan-300/40 via-transparent to-sky-500/10 blur-3xl translate-x-10"></div>
        </div>
        <div class="relative grid gap-8 md:grid-cols-[minmax(0,1.4fr)_minmax(0,1fr)] items-center">
            <div>
                <p class="text-[11px] font-semibold tracking-[0.18em] uppercase text-cyan-200 mb-2">
                    Program Pemagangan Nasional
                </p>
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-semibold leading-tight">
                    Layanan pemagangan nasional yang data-driven, inklusif, dan terhubung dengan industri.
                </h1>
                <p class="mt-3 text-sm sm:text-[15px] text-sky-50/85 max-w-xl">
                    BINALAVOGAN memfasilitasi kolaborasi antara dunia usaha, dunia industri, lembaga pelatihan,
                    dan pencari kerja untuk membangun ekosistem pemagangan yang berstandar dan berkelanjutan.
                </p>
                <div class="mt-5 flex flex-wrap gap-3">
                    <a href="{{ route('registration.index') }}#peserta"
                       class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-2 text-sm font-semibold text-sky-900 shadow-sm hover:bg-slate-50 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-offset-sky-900 focus-visible:ring-white">
                        <span>Daftar sebagai Peserta</span>
                    </a>
                    <a href="{{ route('registration.index') }}#industri"
                       class="inline-flex items-center gap-2 rounded-full border border-white/40 bg-white/5 px-4 py-2 text-sm font-semibold text-cyan-50 backdrop-blur hover:bg-white/10 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white/70">
                        <span>Daftarkan Industri / BLK</span>
                    </a>
                </div>
                <dl class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-4 text-xs sm:text-[13px]">
                    @foreach($quickStats as $stat)
                        <div class="rounded-xl border border-white/10 bg-white/5 px-3 py-2.5">
                            <dt class="text-cyan-100/80">{{ $stat['label'] }}</dt>
                            <dd class="mt-1 text-sm font-semibold text-white">
                                {{ $stat['value'] }}
                            </dd>
                        </div>
                    @endforeach
                </dl>
            </div>
            <div class="relative">
                <div class="rounded-2xl bg-slate-900/60 border border-cyan-400/40 p-4 sm:p-5 shadow-lg backdrop-blur">
                    <h2 class="text-sm font-semibold flex items-center justify-between">
                        <span>Batch Pemagangan Terbaru</span>
                        <span class="inline-flex items-center rounded-full bg-emerald-400/15 text-emerald-100 px-2 py-0.5 text-[11px] font-semibold border border-emerald-300/40">
                            {{ $latestBatch['status'] ?? 'Informasi' }}
                        </span>
                    </h2>
                    <dl class="mt-3 grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs sm:text-sm">
                        <div>
                            <dt class="text-slate-200/80">Nama Batch</dt>
                            <dd class="mt-0.5 font-semibold text-white">
                                {{ $latestBatch['name'] ?? 'Batch Nasional' }}
                            </dd>
                        </div>
                        <div>
                            <dt class="text-slate-200/80">Periode</dt>
                            <dd class="mt-0.5 font-semibold text-white">
                                {{ $latestBatch['period'] ?? '-' }}
                            </dd>
                        </div>
                    </dl>
                    <div class="mt-4 flex items-center justify-between gap-3 text-xs">
                        <p class="text-slate-200/80 max-w-[70%]">
                            Pendaftaran peserta dilakukan melalui MagangHub. Industri dapat mengajukan kuota langsung di portal ini.
                        </p>
                        <a href="{{ $latestBatch['registration_url'] ?? route('registration.index') }}"
                           class="inline-flex flex-shrink-0 items-center rounded-full border border-cyan-300/60 bg-cyan-400/10 px-3 py-1 text-[11px] font-semibold text-cyan-100 hover:bg-cyan-400/20">
                            Detail
                            <span class="ml-1" aria-hidden="true">↗</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    {{-- Quick actions --}}
    <section aria-labelledby="quick-access-heading" class="mt-8">
        <div class="flex items-center justify-between mb-4">
            <h2 id="quick-access-heading" class="text-sm font-semibold text-slate-900">
                Portal layanan utama
            </h2>
            <p class="text-xs text-slate-500">
                Akses cepat untuk peserta, industri, dan pemangku kepentingan.
            </p>
        </div>
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <a href="{{ route('registration.index') }}#peserta"
               class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-4 shadow-sm hover:shadow-md transition-shadow focus:outline-none focus:ring-2 focus:ring-sky-500">
                <div class="absolute -right-6 -top-6 h-16 w-16 rounded-full bg-sky-100 group-hover:bg-sky-200 transition-colors"></div>
                <div class="relative">
                    <p class="inline-flex items-center gap-1 rounded-full bg-sky-50 px-2 py-0.5 text-[11px] font-semibold text-sky-800 mb-2">
                        Peserta
                    </p>
                    <p class="text-sm font-semibold text-slate-900 mb-1">
                        Pendaftaran Peserta
                    </p>
                    <p class="text-xs text-slate-600">
                        Lihat persyaratan dan alur pendaftaran peserta Program Pemagangan Nasional.
                    </p>
                </div>
            </a>
            <a href="{{ route('registration.index') }}#industri"
               class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-4 shadow-sm hover:shadow-md transition-shadow focus:outline-none focus:ring-2 focus:ring-sky-500">
                <div class="absolute -right-6 -top-6 h-16 w-16 rounded-full bg-cyan-100 group-hover:bg-cyan-200 transition-colors"></div>
                <div class="relative">
                    <p class="inline-flex items-center gap-1 rounded-full bg-cyan-50 px-2 py-0.5 text-[11px] font-semibold text-cyan-800 mb-2">
                        Industri / BLK / LPK
                    </p>
                    <p class="text-sm font-semibold text-slate-900 mb-1">
                        Pendaftaran Penyelenggara
                    </p>
                    <p class="text-xs text-slate-600">
                        Ajukan minat menjadi perusahaan atau lembaga penyelenggara pemagangan.
                    </p>
                </div>
            </a>
            <a href="{{ route('statistics.public') }}"
               class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-4 shadow-sm hover:shadow-md transition-shadow focus:outline-none focus:ring-2 focus:ring-sky-500">
                <div class="absolute -right-6 -top-6 h-16 w-16 rounded-full bg-emerald-100 group-hover:bg-emerald-200 transition-colors"></div>
                <div class="relative">
                    <p class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2 py-0.5 text-[11px] font-semibold text-emerald-800 mb-2">
                        Data & Analitik
                    </p>
                    <p class="text-sm font-semibold text-slate-900 mb-1">
                        Statistik Program
                    </p>
                    <p class="text-xs text-slate-600">
                        Pantau sebaran peserta, sektor industri, dan capaian penempatan kerja nasional.
                    </p>
                </div>
            </a>
            <a href="{{ route('documents.index') }}"
               class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white p-4 shadow-sm hover:shadow-md transition-shadow focus:outline-none focus:ring-2 focus:ring-sky-500">
                <div class="absolute -right-6 -top-6 h-16 w-16 rounded-full bg-amber-100 group-hover:bg-amber-200 transition-colors"></div>
                <div class="relative">
                    <p class="inline-flex items-center gap-1 rounded-full bg-amber-50 px-2 py-0.5 text-[11px] font-semibold text-amber-800 mb-2">
                        Regulasi & Pedoman
                    </p>
                    <p class="text-sm font-semibold text-slate-900 mb-1">
                        Pusat Dokumen
                    </p>
                    <p class="text-xs text-slate-600">
                        Unduh pedoman, SOP, SK, Permenaker, juklak, juknis, dan template kerja sama.
                    </p>
                </div>
            </a>
        </div>
    </section>

    {{-- Highlight statistics --}}
    <section class="mt-10 border-t border-slate-200 pt-6" aria-labelledby="stats-heading">
        <div class="flex items-center justify-between mb-4">
            <h2 id="stats-heading" class="text-sm font-semibold text-slate-900">
                Ringkasan capaian Program Pemagangan Nasional
            </h2>
            <a href="{{ route('statistics.public') }}" class="inline-flex items-center text-xs font-semibold text-sky-800 hover:text-sky-900">
                Buka dashboard publik
                <span class="ml-1" aria-hidden="true">→</span>
            </a>
        </div>
        <dl class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($quickStats as $stat)
                <div class="rounded-2xl bg-white border border-slate-200 p-4 shadow-sm">
                    <dt class="text-xs text-slate-600">{{ $stat['label'] }}</dt>
                    <dd class="mt-2 text-2xl font-semibold text-slate-900">
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

    {{-- Program Pemagangan Nasional sections moved from dedicated page --}}
    <section id="program-pemagangan" class="mt-12 space-y-4">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-[11px] font-semibold tracking-[0.25em] uppercase text-cyan-700">
                    Program Pemagangan Nasional
                </p>
                <h2 class="text-xl sm:text-2xl font-semibold text-slate-900">
                    Skema pemagangan terstruktur berbasis industri
                </h2>
            </div>
            <a href="{{ route('program.index') }}" class="hidden sm:inline-flex items-center text-xs font-semibold text-sky-900">
                Lihat detail halaman program
                <span class="ml-2" aria-hidden="true">↗</span>
            </a>
        </div>

        @include('pages.partials.program-sections', [
            'participantRequirements' => $programContent['participant_requirements'],
            'companyRequirements' => $programContent['company_requirements'],
            'faq' => $programContent['faq'],
            'magangHubUrl' => $programContent['maganghub_url'],
        ])
    </section>
@endsection


