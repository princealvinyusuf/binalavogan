@extends('layouts.app')

@section('title', 'Statistik Program Pemagangan Nasional')
@section('meta_description', 'Dashboard publik ringkas untuk memantau statistik Program Pemagangan Nasional: jumlah pendaftar, sebaran provinsi, sektor industri, dan capaian penempatan kerja.')

@section('page_header')
    <div>
        <p class="text-xs font-semibold tracking-wide text-sky-800 uppercase mb-1">
            Statistik &amp; Dashboard Publik
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            Statistik Program Pemagangan Nasional
        </h1>
        <p class="mt-2 text-sm text-slate-700 max-w-3xl">
            Tampilan ringkas indikator utama pelaksanaan Program Pemagangan Nasional. Data lengkap dan
            fungsi analitik lanjutan tersedia pada dashboard internal bagi pemangku kepentingan yang berwenang.
        </p>
    </div>
@endsection

@section('content')
    <section aria-labelledby="filter-heading" class="mb-6">
        <h2 id="filter-heading" class="text-xs font-semibold text-slate-900 uppercase tracking-wide mb-2">
            Filter tampilan data (contoh)
        </h2>
        <form method="GET" action="{{ route('statistics.public') }}" class="grid gap-3 sm:grid-cols-2 lg:grid-cols-4 text-sm">
            <div>
                <label for="batch" class="block text-slate-800 font-semibold">Batch</label>
                <input id="batch" name="batch" type="text" value="{{ $filters['batch'] }}"
                       class="mt-1 block w-full rounded border border-slate-300 px-3 py-1.5 text-sm focus:border-sky-500 focus:ring-sky-500">
            </div>
            <div>
                <label for="province" class="block text-slate-800 font-semibold">Provinsi</label>
                <input id="province" name="province" type="text" value="{{ $filters['province'] }}"
                       class="mt-1 block w-full rounded border border-slate-300 px-3 py-1.5 text-sm focus:border-sky-500 focus:ring-sky-500">
            </div>
            <div>
                <label for="sector" class="block text-slate-800 font-semibold">Sektor Industri</label>
                <input id="sector" name="sector" type="text" value="{{ $filters['sector'] }}"
                       class="mt-1 block w-full rounded border border-slate-300 px-3 py-1.5 text-sm focus:border-sky-500 focus:ring-sky-500">
            </div>
            <div>
                <label for="period" class="block text-slate-800 font-semibold">Periode</label>
                <input id="period" name="period" type="text" value="{{ $filters['period'] }}"
                       class="mt-1 block w-full rounded border border-slate-300 px-3 py-1.5 text-sm focus:border-sky-500 focus:ring-sky-500" placeholder="2023–2025">
            </div>
        </form>
    </section>

    <section class="mb-6" aria-labelledby="summary-heading">
        <h2 id="summary-heading" class="text-xs font-semibold text-slate-900 uppercase tracking-wide mb-2">
            Ringkasan indikator utama (contoh)
        </h2>
        <dl class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4 text-sm">
            <div class="rounded-lg border border-slate-200 bg-white p-4">
                <dt class="text-slate-600">Jumlah Pendaftar</dt>
                <dd class="mt-2 text-xl font-semibold text-slate-900">
                    {{ number_format($summary['applicants']) }}
                </dd>
            </div>
            <div class="rounded-lg border border-slate-200 bg-white p-4">
                <dt class="text-slate-600">Jumlah Diterima</dt>
                <dd class="mt-2 text-xl font-semibold text-slate-900">
                    {{ number_format($summary['accepted']) }}
                </dd>
            </div>
            <div class="rounded-lg border border-slate-200 bg-white p-4">
                <dt class="text-slate-600">Completion Rate</dt>
                <dd class="mt-2 text-xl font-semibold text-slate-900">
                    {{ number_format($summary['completion_rate'] * 100, 0) }}%
                </dd>
            </div>
            <div class="rounded-lg border border-slate-200 bg-white p-4">
                <dt class="text-slate-600">Job Placement Rate</dt>
                <dd class="mt-2 text-xl font-semibold text-slate-900">
                    {{ number_format($summary['placement_rate'] * 100, 0) }}%
                </dd>
            </div>
        </dl>
    </section>

    <section class="space-y-6" aria-label="Visualisasi data (contoh)">
        <div class="grid gap-6 lg:grid-cols-2">
            <figure class="rounded-lg border border-slate-200 bg-white p-4">
                <figcaption class="text-sm font-semibold text-slate-900 mb-2">
                    Jumlah pendaftar vs diterima per batch (contoh)
                </figcaption>
                <div class="text-xs text-slate-600 mb-2">
                    Visualisasi bar chart akan ditempatkan di sini. Di bawah ini tampilan tabel data sebagai alternatif aksesibel.
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-xs border-t border-slate-100">
                        <thead class="bg-slate-50 text-slate-700">
                            <tr>
                                <th class="px-3 py-1.5 text-left font-semibold">Batch</th>
                                <th class="px-3 py-1.5 text-right font-semibold">Pendaftar</th>
                                <th class="px-3 py-1.5 text-right font-semibold">Diterima</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($charts['applicants_vs_accepted'] as $row)
                                <tr class="border-t border-slate-100">
                                    <td class="px-3 py-1.5 text-slate-800">{{ $row['batch'] }}</td>
                                    <td class="px-3 py-1.5 text-right text-slate-800">{{ number_format($row['applicants']) }}</td>
                                    <td class="px-3 py-1.5 text-right text-slate-800">{{ number_format($row['accepted']) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </figure>

            <figure class="rounded-lg border border-slate-200 bg-white p-4">
                <figcaption class="text-sm font-semibold text-slate-900 mb-2">
                    Top sektor industri paling diminati (contoh)
                </figcaption>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-xs border-t border-slate-100">
                        <thead class="bg-slate-50 text-slate-700">
                            <tr>
                                <th class="px-3 py-1.5 text-left font-semibold">Sektor</th>
                                <th class="px-3 py-1.5 text-right font-semibold">Jumlah Peserta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($charts['top_industries'] as $row)
                                <tr class="border-t border-slate-100">
                                    <td class="px-3 py-1.5 text-slate-800">{{ $row['sector'] }}</td>
                                    <td class="px-3 py-1.5 text-right text-slate-800">{{ number_format($row['count']) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </figure>
        </div>

        <figure class="rounded-lg border border-slate-200 bg-white p-4">
            <figcaption class="text-sm font-semibold text-slate-900 mb-2">
                Distribusi peserta per provinsi (contoh)
            </figcaption>
            <div class="text-xs text-slate-600 mb-2">
                Peta Indonesia (heatmap) akan ditambahkan pada tahap integrasi BI. Tabel berikut menggambarkan data yang sama.
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full text-xs border-t border-slate-100">
                    <thead class="bg-slate-50 text-slate-700">
                        <tr>
                            <th class="px-3 py-1.5 text-left font-semibold">Provinsi</th>
                            <th class="px-3 py-1.5 text-right font-semibold">Jumlah Peserta</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($charts['participants_by_province'] as $row)
                            <tr class="border-t border-slate-100">
                                <td class="px-3 py-1.5 text-slate-800">{{ $row['province'] }}</td>
                                <td class="px-3 py-1.5 text-right text-slate-800">{{ number_format($row['count']) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </figure>

        <figure class="rounded-lg border border-slate-200 bg-white p-4">
            <figcaption class="text-sm font-semibold text-slate-900 mb-2">
                Komposisi gender &amp; inklusi (contoh)
            </figcaption>
            <ul class="text-sm text-slate-700 space-y-1">
                @foreach($charts['gender_inclusion'] as $item)
                    <li>
                        {{ $item['label'] }}:
                        <span class="font-semibold">
                            {{ number_format($item['value'] * 100, 0) }}%
                        </span>
                    </li>
                @endforeach
            </ul>
        </figure>
    </section>

    <section class="mt-6 border-t border-slate-200 pt-4" aria-labelledby="export-heading">
        <div class="flex flex-wrap items-center justify-between gap-3">
            <div>
                <h2 id="export-heading" class="text-xs font-semibold text-slate-900 uppercase tracking-wide">
                    Ekspor data (contoh alur)
                </h2>
                <p class="text-xs text-slate-600">
                    Pada implementasi penuh, tombol berikut akan memicu generasi laporan berbasis filter yang dipilih.
                </p>
            </div>
            <div class="flex flex-wrap gap-2">
                <button type="button" class="inline-flex items-center px-3 py-1.5 rounded text-xs font-semibold text-slate-800 border border-slate-300 bg-white">
                    Ekspor Excel
                </button>
                <button type="button" class="inline-flex items-center px-3 py-1.5 rounded text-xs font-semibold text-slate-800 border border-slate-300 bg-white">
                    Ekspor CSV
                </button>
                <button type="button" class="inline-flex items-center px-3 py-1.5 rounded text-xs font-semibold text-slate-800 border border-slate-300 bg-white">
                    Unduh PDF
                </button>
            </div>
        </div>
    </section>
@endsection


