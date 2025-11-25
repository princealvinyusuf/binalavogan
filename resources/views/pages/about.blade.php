@extends('layouts.app')

@section('title', 'Tentang Direktorat | BINALAVOGAN')
@section('meta_description', 'Profil, tugas dan fungsi, struktur organisasi, dan dasar hukum Direktorat BINALAVOGAN di bawah Ditjen Binalavotas, Kemnaker RI.')

@section('page_header')
    <div>
        <p class="text-xs font-semibold tracking-wide text-sky-800 uppercase mb-1">
            Tentang Direktorat
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            Direktorat Bina Penyelenggaraan Pelatihan Vokasi dan Pemagangan (BINALAVOGAN)
        </h1>
        <p class="mt-2 text-sm text-slate-700 max-w-3xl">
            Direktorat di bawah Direktorat Jenderal Bina Penyelenggaraan Pelatihan Vokasi dan Produktivitas (Binalavotas),
            Kementerian Ketenagakerjaan RI, yang bertanggung jawab merumuskan dan melaksanakan kebijakan di bidang
            pemagangan nasional dan pelatihan vokasi.
        </p>
    </div>
@endsection

@section('content')
    <div class="grid gap-8 lg:grid-cols-3">
        <section class="lg:col-span-2 space-y-6">
            <div>
                <h2 class="text-sm font-semibold text-slate-900 mb-2">Tugas dan Fungsi (Tupoksi)</h2>
                <p class="text-sm text-slate-700 mb-2">
                    Secara umum, BINALAVOGAN bertugas melaksanakan perumusan dan pelaksanaan kebijakan teknis di bidang
                    penyelenggaraan pemagangan nasional dan pelatihan vokasi, termasuk:
                </p>
                <ul class="list-disc list-inside text-sm text-slate-700 space-y-1">
                    <li>Perumusan pedoman, standar, dan mekanisme penyelenggaraan pemagangan.</li>
                    <li>Fasilitasi kerja sama dengan dunia usaha, dunia industri, dan lembaga pelatihan.</li>
                    <li>Pembinaan dan pengawasan pelaksanaan program pemagangan di seluruh wilayah Indonesia.</li>
                    <li>Pengelolaan data dan informasi pemagangan sebagai dasar perumusan kebijakan.</li>
                </ul>
            </div>

            <div>
                <h2 class="text-sm font-semibold text-slate-900 mb-2">Struktur Organisasi</h2>
                <p class="text-sm text-slate-700 mb-3">
                    Struktur organisasi Direktorat BINALAVOGAN terdiri dari:
                </p>
                <ul class="list-disc list-inside text-sm text-slate-700 space-y-1">
                    <li>Direktur Bina Penyelenggaraan Pelatihan Vokasi dan Pemagangan.</li>
                    <li>Subdirektorat yang menangani perencanaan program, kemitraan industri, dan evaluasi.</li>
                    <li>Kelompok jabatan fungsional terkait pelatihan vokasi dan pemagangan.</li>
                </ul>
                <p class="text-xs text-slate-500 mt-2">
                    Catatan: visual bagan struktur dapat ditambahkan dalam bentuk gambar atau komponen interaktif.
                </p>
            </div>

            <div>
                <h2 class="text-sm font-semibold text-slate-900 mb-2">Hubungan dengan Ditjen Binalavotas &amp; Kemnaker</h2>
                <p class="text-sm text-slate-700">
                    BINALAVOGAN berada di bawah koordinasi Ditjen Binalavotas yang memiliki mandat pengembangan pelatihan
                    vokasi dan produktivitas tenaga kerja. Secara kelembagaan, BINALAVOGAN mendukung misi Kemnaker untuk:
                </p>
                <ul class="list-disc list-inside text-sm text-slate-700 mt-2 space-y-1">
                    <li>Meningkatkan kualitas dan kompetensi tenaga kerja Indonesia.</li>
                    <li>Mendorong perluasan kesempatan kerja melalui skema pemagangan yang adil dan inklusif.</li>
                    <li>Memperkuat kolaborasi lintas pemangku kepentingan di bidang ketenagakerjaan.</li>
                </ul>
            </div>

            <div>
                <h2 class="text-sm font-semibold text-slate-900 mb-2">Regulasi dan Dasar Hukum</h2>
                <p class="text-sm text-slate-700 mb-2">
                    Penyelenggaraan Program Pemagangan Nasional berlandaskan pada regulasi antara lain:
                </p>
                <ul class="list-disc list-inside text-sm text-slate-700 space-y-1">
                    <li>Undang-Undang terkait Ketenagakerjaan dan Pelatihan Kerja.</li>
                    <li>Peraturan Pemerintah dan Permenaker tentang pemagangan di dalam negeri.</li>
                    <li>Keputusan Menteri, SK, juklak, dan juknis yang mengatur implementasi teknis program.</li>
                </ul>
                <p class="text-sm text-slate-700 mt-2">
                    Dokumen lengkap regulasi dapat diakses pada menu
                    <a href="{{ route('documents.index') }}" class="text-sky-800 font-semibold hover:text-sky-900">
                        Dokumen &amp; Unduhan.
                    </a>
                </p>
            </div>
        </section>

        <aside aria-label="Ringkasan singkat" class="space-y-4">
            <div class="rounded-lg border border-slate-200 bg-white p-4">
                <h2 class="text-xs font-semibold text-slate-900 uppercase tracking-wide mb-2">Profil Singkat</h2>
                <dl class="space-y-2 text-sm">
                    <div>
                        <dt class="text-slate-600">Nama Direktorat</dt>
                        <dd class="font-semibold text-slate-900">
                            Direktorat Bina Penyelenggaraan Pelatihan Vokasi dan Pemagangan
                        </dd>
                    </div>
                    <div>
                        <dt class="text-slate-600">Eselon</dt>
                        <dd class="font-semibold text-slate-900">
                            Direktorat di bawah Ditjen Binalavotas
                        </dd>
                    </div>
                    <div>
                        <dt class="text-slate-600">Kementerian</dt>
                        <dd class="font-semibold text-slate-900">
                            Kementerian Ketenagakerjaan RI
                        </dd>
                    </div>
                </dl>
            </div>
        </aside>
    </div>
@endsection


