@extends('layouts.public')

@section('title', 'Tentang Direktorat | BINALAVOGAN')
@section('meta_description', 'Profil, tugas dan fungsi, struktur organisasi, dan dasar hukum Direktorat BINALAVOGAN di bawah Ditjen Binalavotas, Kemnaker RI.')

@section('page_header')
    <div class="space-y-3">
        <p class="text-[11px] font-semibold tracking-[0.25em] uppercase text-sky-700">
            Tentang Direktorat
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900 max-w-4xl">
            Direktorat Bina Penyelenggaraan Pelatihan Vokasi dan Pemagangan (BINALAVOGAN)
        </h1>
        <p class="text-sm text-slate-700 max-w-3xl">
            Direktorat teknis di bawah Ditjen Binalavotas, Kemnaker RI yang memimpin perumusan kebijakan,
            pembinaan, dan pengawasan penyelenggaraan pemagangan nasional berbasis data dan kolaborasi lintas sektor.
        </p>
    </div>
@endsection

@section('content')
    <div class="grid gap-8 lg:grid-cols-[minmax(0,2fr)_minmax(0,1fr)]">
        <section class="space-y-8">
            <div class="rounded-3xl bg-white p-6 shadow-sm border border-slate-100">
                <div class="flex items-center justify-between gap-4">
                    <h2 class="text-base font-semibold text-slate-900">Tugas &amp; Fungsi Strategis</h2>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-[0.2em]">
                        Tupoksi
                    </span>
                </div>
                <p class="mt-3 text-sm text-slate-600">
                    BINALAVOGAN bertanggung jawab memastikan penyelenggaraan pemagangan nasional berjalan efektif,
                    inklusif, dan adaptif terhadap kebutuhan industri.
                </p>
                <div class="mt-4 grid gap-3 sm:grid-cols-2 text-sm text-slate-700">
                    <div class="rounded-2xl border border-slate-100 bg-slate-50/60 px-4 py-3">
                        Perumusan pedoman, standar, dan mekanisme penyelenggaraan pemagangan nasional.
                    </div>
                    <div class="rounded-2xl border border-slate-100 bg-slate-50/60 px-4 py-3">
                        Fasilitasi kerja sama dengan dunia usaha, dunia industri, BLK, dan LPK.
                    </div>
                    <div class="rounded-2xl border border-slate-100 bg-slate-50/60 px-4 py-3">
                        Pembinaan dan pengawasan pelaksanaan program di seluruh provinsi.
                    </div>
                    <div class="rounded-2xl border border-slate-100 bg-slate-50/60 px-4 py-3">
                        Pengelolaan data &amp; analitik pemagangan sebagai dasar pengambilan keputusan.
                    </div>
                </div>
            </div>

            <div class="rounded-3xl bg-white p-6 shadow-sm border border-slate-100 space-y-5">
                <div class="flex items-center justify-between gap-4">
                    <h2 class="text-base font-semibold text-slate-900">Struktur Organisasi</h2>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-[0.2em]">
                        Governance
                    </span>
                </div>
                <ul class="text-sm text-slate-700 space-y-2">
                    <li class="flex items-start gap-2">
                        <span class="mt-2 h-1.5 w-1.5 rounded-full bg-sky-500"></span>
                        Direktorat dipimpin oleh Direktur Bina Penyelenggaraan Pelatihan Vokasi dan Pemagangan.
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="mt-2 h-1.5 w-1.5 rounded-full bg-sky-500"></span>
                        Subdirektorat menangani perencanaan, kemitraan industri, pengawasan, dan evaluasi.
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="mt-2 h-1.5 w-1.5 rounded-full bg-sky-500"></span>
                        Kelompok jabatan fungsional mendukung pengembangan kebijakan dan monitoring program.
                    </li>
                </ul>
                <p class="text-xs text-slate-500">
                    Visual bagan organisasi dapat ditambahkan pada fase UI lanjutan (mis. SVG/infografik interaktif).
                </p>
            </div>

            <div class="rounded-3xl bg-white p-6 shadow-sm border border-slate-100 space-y-4">
                <div class="flex items-center justify-between gap-4">
                    <h2 class="text-base font-semibold text-slate-900">Sinergi dengan Ditjen Binalavotas &amp; Kemnaker</h2>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-[0.2em]">
                        Kolaborasi
                    </span>
                </div>
                <p class="text-sm text-slate-600">
                    BINALAVOGAN menjalankan mandat Kemnaker untuk:
                </p>
                <div class="grid gap-3 sm:grid-cols-3 text-sm text-slate-700">
                    <div class="rounded-2xl border border-slate-100 bg-gradient-to-br from-sky-50 to-white px-4 py-3">
                        Meningkatkan kompetensi dan sertifikasi tenaga kerja.
                    </div>
                    <div class="rounded-2xl border border-slate-100 bg-gradient-to-br from-cyan-50 to-white px-4 py-3">
                        Memperluas kesempatan kerja melalui pemagangan yang adil dan inklusif.
                    </div>
                    <div class="rounded-2xl border border-slate-100 bg-gradient-to-br from-emerald-50 to-white px-4 py-3">
                        Menguatkan jejaring kebijakan dengan pemerintah daerah dan industri prioritas.
                    </div>
                </div>
            </div>

            <div class="rounded-3xl bg-white p-6 shadow-sm border border-slate-100 space-y-4">
                <div class="flex items-center justify-between gap-4">
                    <h2 class="text-base font-semibold text-slate-900">Regulasi &amp; Dasar Hukum</h2>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-[0.2em]">
                        Legal Framework
                    </span>
                </div>
                <p class="text-sm text-slate-600">
                    Penyelenggaraan pemagangan berpedoman pada:
                </p>
                <ul class="list-disc list-inside text-sm text-slate-700 space-y-1">
                    <li>Undang-Undang Ketenagakerjaan dan Pelatihan Kerja.</li>
                    <li>Peraturan Pemerintah dan Permenaker tentang pemagangan dalam negeri.</li>
                    <li>Keputusan Menteri, SK, juklak, dan juknis teknis program.</li>
                </ul>
                <p class="text-sm text-slate-600">
                    Seluruh dokumen resmi tersedia pada menu
                    <a href="{{ route('documents.index') }}" class="text-sky-700 font-semibold hover:text-sky-900">
                        Dokumen &amp; Unduhan
                    </a>.
                </p>
            </div>
        </section>

        <aside aria-label="Ringkasan Singkat" class="space-y-5">
            <div class="rounded-3xl bg-slate-900 text-white p-6 shadow-xl">
                <p class="text-xs font-semibold tracking-[0.3em] text-cyan-200 uppercase">Profil Singkat</p>
                <dl class="mt-4 space-y-3 text-sm">
                    <div>
                        <dt class="text-slate-300">Nama Direktorat</dt>
                        <dd class="font-semibold text-white">
                            Direktorat Bina Penyelenggaraan Pelatihan Vokasi dan Pemagangan
                        </dd>
                    </div>
                    <div>
                        <dt class="text-slate-300">Eselon</dt>
                        <dd class="font-semibold text-white">
                            Direktorat di bawah Ditjen Binalavotas
                        </dd>
                    </div>
                    <div>
                        <dt class="text-slate-300">Kementerian</dt>
                        <dd class="font-semibold text-white">
                            Kementerian Ketenagakerjaan RI
                        </dd>
                    </div>
                </dl>
            </div>

            <div class="rounded-3xl bg-white p-6 shadow-sm border border-slate-100">
                <p class="text-xs font-semibold text-slate-400 uppercase tracking-[0.3em]">Fokus Strategis</p>
                <ul class="mt-4 space-y-3 text-sm text-slate-700">
                    <li class="flex items-start gap-2">
                        <span class="mt-2 h-1.5 w-1.5 rounded-full bg-cyan-500"></span>
                        Digitalisasi data pemagangan nasional dan integrasi dengan MagangHub.
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="mt-2 h-1.5 w-1.5 rounded-full bg-cyan-500"></span>
                        Pusat layanan kebijakan untuk pemerintah daerah &amp; industri.
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="mt-2 h-1.5 w-1.5 rounded-full bg-cyan-500"></span>
                        Transparansi hasil program melalui dashboard publik &amp; internal.
                    </li>
                </ul>
            </div>
        </aside>
    </div>

    {{-- Kontak & Helpdesk dipindahkan dari halaman Kontak --}}
    <section id="kontak" class="mt-10 grid gap-8 lg:grid-cols-[minmax(0,1.1fr)_minmax(0,1.3fr)]">
        <div aria-label="Informasi kontak" class="rounded-3xl bg-white border border-slate-100 p-6 shadow-sm text-sm space-y-4">
            <div>
                <h2 class="text-xs font-semibold text-slate-400 uppercase tracking-[0.3em]">Call Center</h2>
                <p class="text-slate-900 text-lg font-semibold">{{ $contactInfo['call_center'] }}</p>
            </div>
            <div>
                <h2 class="text-xs font-semibold text-slate-400 uppercase tracking-[0.3em]">Email Resmi</h2>
                <p class="text-slate-700">{{ $contactInfo['email'] }}</p>
            </div>
            <div>
                <h2 class="text-xs font-semibold text-slate-400 uppercase tracking-[0.3em]">Alamat Kantor</h2>
                <p class="text-slate-700">{{ $contactInfo['address'] }}</p>
            </div>
            <div>
                <h2 class="text-xs font-semibold text-slate-400 uppercase tracking-[0.3em]">Jam Layanan</h2>
                <p class="text-slate-700">{{ $contactInfo['office_hours'] }}</p>
            </div>
            <div>
                <h2 class="text-xs font-semibold text-slate-400 uppercase tracking-[0.3em]">FAQ Navigasi Situs</h2>
                <p class="text-slate-600">
                    Pertanyaan umum terkait penggunaan situs dan akses layanan akan dirangkum dalam halaman FAQ navigasi yang dapat diperbarui secara berkala.
                </p>
            </div>
        </div>

        <div aria-label="Formulir kontak" class="rounded-3xl bg-white border border-slate-100 p-6 shadow-sm text-sm">
            <h2 class="text-base font-semibold text-slate-900 mb-2">
                Formulir Pengaduan / Pertanyaan
            </h2>
            <p class="text-xs text-slate-500 mb-3">
                Gunakan formulir ini untuk menyampaikan pertanyaan, pengaduan, atau saran. Data akan diperlakukan sesuai kebijakan privasi Kemnaker.
            </p>

            <form method="POST" action="{{ route('contact.store') }}" novalidate class="space-y-4">
                @csrf
                <div>
                    <label for="contact_name" class="block text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                        Nama Lengkap
                    </label>
                    <input id="contact_name" name="name" type="text"
                           class="mt-1 block w-full rounded-2xl border border-slate-200 px-3 py-2 text-sm focus:border-sky-500 focus:ring-sky-500"
                           value="{{ old('name') }}" required>
                    @error('name')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="contact_email" class="block text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                        Email
                    </label>
                    <input id="contact_email" name="email" type="email"
                           class="mt-1 block w-full rounded-2xl border border-slate-200 px-3 py-2 text-sm focus:border-sky-500 focus:ring-sky-500"
                           value="{{ old('email') }}" required>
                    @error('email')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="contact_topic" class="block text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                        Topik
                    </label>
                    <input id="contact_topic" name="topic" type="text"
                           class="mt-1 block w-full rounded-2xl border border-slate-200 px-3 py-2 text-sm focus:border-sky-500 focus:ring-sky-500"
                           value="{{ old('topic') }}" required>
                    @error('topic')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="contact_message" class="block text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                        Pesan
                    </label>
                    <textarea id="contact_message" name="message" rows="4"
                              class="mt-1 block w-full rounded-2xl border border-slate-200 px-3 py-2 text-sm focus:border-sky-500 focus:ring-sky-500"
                              required>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <p class="text-xs text-slate-500">
                        CAPTCHA / verifikasi keamanan akan ditempatkan di sini pada lingkungan produksi.
                    </p>
                </div>

                <div class="pt-2">
                    <button type="submit"
                            class="inline-flex items-center rounded-full bg-sky-900 text-white text-sm font-semibold px-5 py-2 shadow hover:bg-sky-800">
                        Kirim Pesan
                    </button>
                </div>
            </form>

            <p class="mt-3 text-xs text-slate-500">
                Opsi chat langsung / chatbot daring dapat diintegrasikan melalui widget pihak ketiga atau solusi internal Kemnaker.
            </p>
        </div>
    </section>
@endsection


