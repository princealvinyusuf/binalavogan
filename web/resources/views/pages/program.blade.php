@extends('layouts.app')

@section('title', 'Program Pemagangan Nasional | BINALAVOGAN')
@section('meta_description', 'Informasi lengkap tentang Program Pemagangan Nasional: tujuan, manfaat, persyaratan peserta dan perusahaan, serta integrasi dengan MagangHub.')

@section('page_header')
    <div>
        <p class="text-xs font-semibold tracking-wide text-sky-800 uppercase mb-1">
            Program Pemagangan Nasional
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            Skema pemagangan terstruktur untuk memperkuat kompetensi kerja berbasis industri.
        </h1>
        <p class="mt-2 text-sm text-slate-700 max-w-3xl">
            Program Pemagangan Nasional memfasilitasi pembelajaran di dunia kerja melalui penempatan peserta
            pada perusahaan mitra dengan kurikulum pemagangan yang disepakati dan diawasi secara bersama.
        </p>
    </div>
@endsection

@section('content')
    <div class="grid gap-8 lg:grid-cols-[2fr,1fr]">
        <section class="space-y-8">
            <div id="gambaran-umum">
                <h2 class="text-sm font-semibold text-slate-900 mb-2">Gambaran Umum Program</h2>
                <p class="text-sm text-slate-700 mb-2">
                    Program Pemagangan Nasional dirancang sebagai jembatan antara pendidikan formal/nonformal
                    dengan kebutuhan nyata dunia kerja. Melalui pemagangan, peserta mendapatkan pengalaman kerja
                    langsung, bimbingan instruktur industri, dan kesempatan untuk membangun jejaring profesional.
                </p>
                <p class="text-sm text-slate-700">
                    Perusahaan dan lembaga pelatihan mendapatkan kesempatan untuk menyiapkan calon tenaga kerja
                    yang sesuai kebutuhan, sekaligus berkontribusi pada peningkatan kualitas SDM nasional.
                </p>
            </div>

            <div id="manfaat">
                <h2 class="text-sm font-semibold text-slate-900 mb-2">Manfaat Program</h2>
                <div class="grid gap-3 sm:grid-cols-3">
                    <div class="rounded-lg border border-slate-200 bg-white p-3 text-sm">
                        <h3 class="font-semibold text-slate-900 mb-1">Bagi Peserta</h3>
                        <ul class="list-disc list-inside text-slate-700 space-y-1">
                            <li>Pengalaman kerja nyata di lingkungan industri.</li>
                            <li>Peningkatan kompetensi teknis dan soft skills.</li>
                            <li>Peluang penempatan kerja setelah pemagangan.</li>
                        </ul>
                    </div>
                    <div class="rounded-lg border border-slate-200 bg-white p-3 text-sm">
                        <h3 class="font-semibold text-slate-900 mb-1">Bagi Industri</h3>
                        <ul class="list-disc list-inside text-slate-700 space-y-1">
                            <li>Akses talenta muda yang siap dikembangkan.</li>
                            <li>Fleksibilitas menyesuaikan kurikulum pemagangan.</li>
                            <li>Penguatan reputasi sebagai mitra pemerintah.</li>
                        </ul>
                    </div>
                    <div class="rounded-lg border border-slate-200 bg-white p-3 text-sm">
                        <h3 class="font-semibold text-slate-900 mb-1">Bagi Pemerintah</h3>
                        <ul class="list-disc list-inside text-slate-700 space-y-1">
                            <li>Data terukur terkait transisi sekolah-ke-kerja.</li>
                            <li>Penguatan kebijakan berbasis bukti (evidence-based).</li>
                            <li>Kontribusi pada penurunan pengangguran terbuka.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="persyaratan-peserta" class="border-t border-slate-200 pt-5">
                <h2 class="text-sm font-semibold text-slate-900 mb-2">Persyaratan Peserta</h2>
                <ul class="list-disc list-inside text-sm text-slate-700 space-y-1">
                    @foreach($participantRequirements as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <div id="persyaratan-perusahaan">
                <h2 class="text-sm font-semibold text-slate-900 mb-2">Persyaratan Perusahaan / Lembaga</h2>
                <ul class="list-disc list-inside text-sm text-slate-700 space-y-1">
                    @foreach($companyRequirements as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <div id="faq" class="border-t border-slate-200 pt-5">
                <h2 class="text-sm font-semibold text-slate-900 mb-3">Pertanyaan yang Sering Diajukan</h2>
                <div class="space-y-3">
                    @foreach($faq as $item)
                        <details class="rounded border border-slate-200 bg-white p-3">
                            <summary class="text-sm font-semibold text-slate-900 cursor-pointer">
                                {{ $item['question'] }}
                            </summary>
                            <p class="mt-2 text-sm text-slate-700">
                                {{ $item['answer'] }}
                            </p>
                        </details>
                    @endforeach
                </div>
            </div>
        </section>

        <aside class="space-y-4" aria-label="Navigasi dan integrasi">
            <div class="rounded-lg border border-slate-200 bg-white p-4 text-sm">
                <h2 class="text-xs font-semibold text-slate-900 uppercase tracking-wide mb-2">
                    Navigasi Halaman
                </h2>
                <ul class="space-y-1">
                    <li><a href="#gambaran-umum" class="text-sky-800 hover:text-sky-900">Gambaran Umum</a></li>
                    <li><a href="#manfaat" class="text-sky-800 hover:text-sky-900">Manfaat Program</a></li>
                    <li><a href="#persyaratan-peserta" class="text-sky-800 hover:text-sky-900">Persyaratan Peserta</a></li>
                    <li><a href="#persyaratan-perusahaan" class="text-sky-800 hover:text-sky-900">Persyaratan Perusahaan</a></li>
                    <li><a href="#faq" class="text-sky-800 hover:text-sky-900">FAQ</a></li>
                </ul>
            </div>

            <div class="rounded-lg border border-sky-200 bg-sky-50 p-4 text-sm">
                <h2 class="text-xs font-semibold text-slate-900 uppercase tracking-wide mb-2">
                    Integrasi MagangHub
                </h2>
                <p class="text-slate-700 mb-3">
                    Pendaftaran peserta dan manajemen lowongan pemagangan dilayani melalui
                    platform resmi MagangHub Kemnaker.
                </p>
                <a href="{{ $magangHubUrl }}" target="_blank" rel="noopener"
                   class="inline-flex items-center px-3 py-1.5 rounded text-xs font-semibold text-white bg-sky-800 hover:bg-sky-900">
                    Masuk ke MagangHub
                </a>
                <p class="mt-2 text-xs text-slate-600">
                    Tautan akan membuka jendela baru ke portal MagangHub.
                </p>
            </div>
        </aside>
    </div>
@endsection


