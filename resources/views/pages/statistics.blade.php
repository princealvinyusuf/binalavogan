@extends('layouts.public')

@section('title', 'Statistik Program Pemagangan Nasional')
@section('meta_description', 'Dashboard publik ringkas untuk memantau statistik Program Pemagangan Nasional: jumlah pendaftar, sebaran provinsi, sektor industri, dan capaian penempatan kerja.')

@section('page_header')
    <div class="space-y-3">
        <p class="text-[11px] font-semibold tracking-[0.25em] uppercase text-cyan-700">
            Statistik &amp; Dashboard Publik
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            Statistik Program Pemagangan Nasional
        </h1>
        <p class="text-sm text-slate-700 max-w-3xl">
            Ringkasan indikator utama pelaksanaan Program Pemagangan Nasional. Data lengkap dan fitur drill-down
            tersedia pada dashboard internal bagi pemangku kepentingan yang berwenang.
        </p>
    </div>
@endsection

@section('content')
    <section aria-labelledby="filter-heading" class="mb-10 rounded-3xl bg-white border border-slate-100 shadow-sm p-6">
        <div class="flex items-center justify-between gap-4">
            <div>
                <h2 id="filter-heading" class="text-base font-semibold text-slate-900">
                    Filter tampilan data (contoh)
                </h2>
                <p class="text-xs text-slate-500">
                    Pilih parameter untuk melihat ringkasan statistik spesifik.
                </p>
            </div>
            <a href="{{ route('dashboard.internal') }}" class="hidden sm:inline-flex items-center rounded-full bg-sky-900 text-white text-xs font-semibold px-4 py-2 shadow hover:bg-sky-800">
                Buka dashboard internal
                <span class="ml-2" aria-hidden="true">↗</span>
            </a>
        </div>
        <form method="GET" action="{{ route('statistics.public') }}" class="mt-5 grid gap-4 sm:grid-cols-2 lg:grid-cols-4 text-sm">
            @php
                $fields = [
                    ['label' => 'Batch', 'name' => 'batch', 'placeholder' => '2024-1'],
                    ['label' => 'Provinsi', 'name' => 'province', 'placeholder' => 'Jawa Barat'],
                    ['label' => 'Sektor Industri', 'name' => 'sector', 'placeholder' => 'Manufaktur'],
                    ['label' => 'Periode', 'name' => 'period', 'placeholder' => '2023–2025'],
                ];
            @endphp
            @foreach($fields as $field)
                <div>
                    <label for="{{ $field['name'] }}" class="block text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                        {{ $field['label'] }}
                    </label>
                    <input id="{{ $field['name'] }}" name="{{ $field['name'] }}" type="text"
                           value="{{ $filters[$field['name']] }}"
                           placeholder="{{ $field['placeholder'] }}"
                           class="mt-1 block w-full rounded-2xl border border-slate-200 px-3 py-2 focus:border-sky-500 focus:ring-sky-500 text-sm">
                </div>
            @endforeach
        </form>
    </section>

    <section class="mb-10" aria-labelledby="summary-heading">
        <h2 id="summary-heading" class="text-xs font-semibold text-slate-400 uppercase tracking-[0.3em] mb-3">
            Ringkasan indikator utama
        </h2>
        <dl class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4 text-sm">
            @php
                $summaryCards = [
                    ['label' => 'Jumlah Pendaftar', 'value' => number_format($summary['applicants'])],
                    ['label' => 'Jumlah Diterima', 'value' => number_format($summary['accepted'])],
                    ['label' => 'Completion Rate', 'value' => number_format($summary['completion_rate'] * 100, 0) . '%'],
                    ['label' => 'Job Placement Rate', 'value' => number_format($summary['placement_rate'] * 100, 0) . '%'],
                ];
            @endphp
            @foreach($summaryCards as $card)
                <div class="rounded-3xl bg-white border border-slate-100 p-5 shadow-sm">
                    <dt class="text-xs text-slate-500 uppercase tracking-[0.2em]">{{ $card['label'] }}</dt>
                    <dd class="mt-3 text-2xl font-semibold text-slate-900">
                        {{ $card['value'] }}
                    </dd>
                </div>
            @endforeach
        </dl>
    </section>

    <section class="space-y-8" aria-label="Visualisasi data (contoh)">
        <div class="grid gap-6 lg:grid-cols-2">
            <figure class="rounded-3xl bg-white border border-slate-100 p-6 shadow-sm">
                <figcaption class="text-base font-semibold text-slate-900 mb-1">
                    Pendaftar vs diterima per batch
                </figcaption>
                <p class="text-xs text-slate-500 mb-4">
                    Visualisasi bar chart akan ditambahkan. Tabel berikut merupakan padanan aksesibel.
                </p>
                <div class="overflow-x-auto rounded-2xl border border-slate-100">
                    <table class="min-w-full text-xs">
                        <thead class="bg-slate-50 text-slate-600">
                            <tr>
                                <th class="px-4 py-2 text-left font-semibold">Batch</th>
                                <th class="px-4 py-2 text-right font-semibold">Pendaftar</th>
                                <th class="px-4 py-2 text-right font-semibold">Diterima</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach($charts['applicants_vs_accepted'] as $row)
                                <tr class="bg-white">
                                    <td class="px-4 py-2 text-slate-800">{{ $row['batch'] }}</td>
                                    <td class="px-4 py-2 text-right text-slate-800">{{ number_format($row['applicants']) }}</td>
                                    <td class="px-4 py-2 text-right text-slate-800">{{ number_format($row['accepted']) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </figure>

            <figure class="rounded-3xl bg-white border border-slate-100 p-6 shadow-sm">
                <figcaption class="text-base font-semibold text-slate-900 mb-1">
                    Sektor industri paling diminati
                </figcaption>
                <p class="text-xs text-slate-500 mb-4">
                    Menunjukkan jumlah peserta yang memilih sektor tertentu pada pendaftaran.
                </p>
                <div class="overflow-x-auto rounded-2xl border border-slate-100">
                    <table class="min-w-full text-xs">
                        <thead class="bg-slate-50 text-slate-600">
                            <tr>
                                <th class="px-4 py-2 text-left font-semibold">Sektor</th>
                                <th class="px-4 py-2 text-right font-semibold">Jumlah Peserta</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach($charts['top_industries'] as $row)
                                <tr class="bg-white">
                                    <td class="px-4 py-2 text-slate-800">{{ $row['sector'] }}</td>
                                    <td class="px-4 py-2 text-right text-slate-800">{{ number_format($row['count']) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </figure>
        </div>

        <figure class="rounded-3xl bg-white border border-slate-100 p-6 shadow-sm">
            <figcaption class="text-base font-semibold text-slate-900 mb-1">
                Distribusi peserta per provinsi
            </figcaption>
            <p class="text-xs text-slate-500 mb-4">
                Peta heatmap akan ditambahkan pada tahap integrasi BI. Sementara itu, tabel berikut dapat digunakan sebagai referensi.
            </p>
            <div class="overflow-x-auto rounded-2xl border border-slate-100">
                <table class="min-w-full text-xs">
                    <thead class="bg-slate-50 text-slate-600">
                        <tr>
                            <th class="px-4 py-2 text-left font-semibold">Provinsi</th>
                            <th class="px-4 py-2 text-right font-semibold">Jumlah Peserta</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach($charts['participants_by_province'] as $row)
                            <tr class="bg-white">
                                <td class="px-4 py-2 text-slate-800">{{ $row['province'] }}</td>
                                <td class="px-4 py-2 text-right text-slate-800">{{ number_format($row['count']) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </figure>

        <figure class="rounded-3xl bg-white border border-slate-100 p-6 shadow-sm">
            <figcaption class="text-base font-semibold text-slate-900 mb-1">
                Komposisi gender &amp; inklusi
            </figcaption>
            <p class="text-xs text-slate-500 mb-4">
                Menunjukkan proporsi peserta berdasarkan gender dan preferensi pengungkapan.
            </p>
            <ul class="text-sm text-slate-700 space-y-1">
                @foreach($charts['gender_inclusion'] as $item)
                    <li class="flex items-center justify-between">
                        <span>{{ $item['label'] }}</span>
                        <span class="font-semibold">{{ number_format($item['value'] * 100, 0) }}%</span>
                    </li>
                @endforeach
            </ul>
        </figure>
    </section>

    <section class="mt-10 rounded-3xl bg-white border border-slate-100 shadow-sm p-6" aria-labelledby="export-heading">
        <div class="flex flex-wrap items-center justify-between gap-3">
            <div>
                <h2 id="export-heading" class="text-base font-semibold text-slate-900">
                    Ekspor data (contoh alur)
                </h2>
                <p class="text-xs text-slate-500">
                    Tombol ekspor akan menghasilkan laporan sesuai filter yang dipilih pada implementasi penuh.
                </p>
            </div>
            <div class="flex flex-wrap gap-2">
                <button type="button" class="inline-flex items-center rounded-full border border-slate-200 px-4 py-2 text-xs font-semibold text-slate-700 bg-slate-50 hover:bg-white">
                    Ekspor Excel
                </button>
                <button type="button" class="inline-flex items-center rounded-full border border-slate-200 px-4 py-2 text-xs font-semibold text-slate-700 bg-slate-50 hover:bg-white">
                    Ekspor CSV
                </button>
                <button type="button" class="inline-flex items-center rounded-full border border-slate-200 px-4 py-2 text-xs font-semibold text-slate-700 bg-slate-50 hover:bg-white">
                    Unduh PDF
                </button>
            </div>
        </div>
    </section>
@endsection


