@extends('layouts.public')

@section('title', 'Dashboard Internal Program Pemagangan Nasional')
@section('meta_description', 'Dashboard internal untuk pengambil kebijakan dan pengelola Program Pemagangan Nasional.')

@section('page_header')
    <div class="space-y-3">
        <p class="text-[11px] font-semibold tracking-[0.25em] uppercase text-cyan-700">
            Dashboard Internal (Contoh)
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            Ringkasan Capaian &amp; Pemerataan Program
        </h1>
        <p class="text-sm text-slate-700 max-w-3xl">
            Tampilan ini memberikan gambaran singkat indikator kinerja utama dan distribusi program per provinsi dan batch.
            Untuk integrasi penuh, data dapat dihubungkan dengan sistem BI Kemnaker dan MagangHub.
        </p>
    </div>
@endsection

@section('content')
    <section class="mb-8" aria-label="Indikator utama">
        <dl class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4 text-sm">
            @foreach($kpis as $kpi)
                <div class="rounded-3xl bg-white border border-slate-100 p-5 shadow-sm">
                    <dt class="text-xs text-slate-500 uppercase tracking-[0.2em]">{{ $kpi['label'] }}</dt>
                    <dd class="mt-3 text-2xl font-semibold text-slate-900">
                        {{ $kpi['value'] }}
                    </dd>
                </div>
            @endforeach
        </dl>
    </section>

    <section aria-label="Tabel pemerataan" class="space-y-3 text-sm rounded-3xl bg-white border border-slate-100 p-6 shadow-sm">
        <div class="flex items-center justify-between">
            <h2 class="text-base font-semibold text-slate-900">
                Ringkasan per provinsi &amp; batch (contoh)
            </h2>
            <div class="flex flex-wrap gap-2">
                <button type="button" class="inline-flex items-center rounded-full border border-slate-200 px-4 py-2 text-xs font-semibold text-slate-700 bg-slate-50 hover:bg-white">
                    Ekspor Excel
                </button>
                <button type="button" class="inline-flex items-center rounded-full border border-slate-200 px-4 py-2 text-xs font-semibold text-slate-700 bg-slate-50 hover:bg-white">
                    Unduh PDF
                </button>
            </div>
        </div>

        <div class="overflow-x-auto rounded-2xl border border-slate-100">
            <table class="min-w-full text-xs">
                <thead class="bg-slate-50 text-slate-600">
                    <tr>
                        <th class="px-4 py-2 text-left font-semibold">Provinsi</th>
                        <th class="px-4 py-2 text-left font-semibold">Batch</th>
                        <th class="px-4 py-2 text-right font-semibold">Peserta</th>
                        <th class="px-4 py-2 text-right font-semibold">Selesai</th>
                        <th class="px-4 py-2 text-right font-semibold">Ditempatkan</th>
                        <th class="px-4 py-2 text-right font-semibold">Placement Rate</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($tableRows as $row)
                        <tr class="bg-white">
                            <td class="px-4 py-2 text-slate-800">{{ $row['province'] }}</td>
                            <td class="px-4 py-2 text-slate-800">{{ $row['batch'] }}</td>
                            <td class="px-4 py-2 text-right text-slate-800">{{ number_format($row['participants']) }}</td>
                            <td class="px-4 py-2 text-right text-slate-800">{{ number_format($row['completed']) }}</td>
                            <td class="px-4 py-2 text-right text-slate-800">{{ number_format($row['placed']) }}</td>
                            <td class="px-4 py-2 text-right text-slate-800">{{ $row['placement_rate'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <p class="text-xs text-slate-500">
            Data pada halaman ini adalah contoh (mockup). Pada implementasi penuh, data akan ditarik secara berkala dari MagangHub
            dan sistem BI internal melalui API atau proses ETL terjadwal.
        </p>
    </section>
@endsection


