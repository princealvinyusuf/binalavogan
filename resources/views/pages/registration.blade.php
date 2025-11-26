@extends('layouts.public')

@section('title', 'Pendaftaran Program Pemagangan Nasional')
@section('meta_description', 'Informasi dan formulir pendaftaran untuk peserta dan industri penyelenggara Program Pemagangan Nasional.')

@section('page_header')
    <div>
        <p class="text-xs font-semibold tracking-wide text-sky-800 uppercase mb-1">
            Pendaftaran Program Pemagangan Nasional
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            Pendaftaran Peserta dan Industri Penyelenggara
        </h1>
        <p class="mt-2 text-sm text-slate-700 max-w-3xl">
            Pendaftaran peserta dilakukan melalui MagangHub Kemnaker, sedangkan industri/BLK/LPK dapat
            mengisi formulir minat menjadi tuan rumah pemagangan nasional.
        </p>
    </div>
@endsection

@section('content')
    <div class="grid gap-8 lg:grid-cols-[2fr,1.4fr]">
        <section class="space-y-8">
            <div>
                <h2 class="text-sm font-semibold text-slate-900 mb-2">Roadmap Proses Seleksi</h2>
                <ol class="grid gap-3 sm:grid-cols-2 text-sm">
                    @foreach($roadmapSteps as $step)
                        <li class="rounded-lg border border-slate-200 bg-white p-3">
                            <p class="text-xs font-semibold text-sky-800 uppercase tracking-wide">
                                Tahap {{ $step['step'] }}
                            </p>
                            <p class="mt-1 font-semibold text-slate-900">
                                {{ $step['title'] }}
                            </p>
                            <p class="mt-1 text-slate-700">
                                {{ $step['description'] }}
                            </p>
                        </li>
                    @endforeach
                </ol>
            </div>

            <div class="border-t border-slate-200 pt-5" id="peserta">
                <h2 class="text-sm font-semibold text-slate-900 mb-2">Pendaftaran Peserta (via MagangHub)</h2>
                <p class="text-sm text-slate-700 mb-3">
                    Pendaftaran peserta Program Pemagangan Nasional dilaksanakan melalui platform
                    <strong>MagangHub</strong>. Calon peserta diminta membuat akun dan melengkapi data
                    profil, pendidikan, dan minat sektor industri.
                </p>
                <a href="{{ $magangHubUrl }}" target="_blank" rel="noopener"
                   class="inline-flex items-center px-4 py-2 rounded text-sm font-semibold text-white bg-sky-800 hover:bg-sky-900">
                    Masuk ke MagangHub untuk Daftar Peserta
                </a>
                <p class="mt-2 text-xs text-slate-600">
                    Tautan akan membuka jendela baru ke portal MagangHub.
                </p>
            </div>

            <div class="border-t border-slate-200 pt-5" id="kalender">
                <h2 class="text-sm font-semibold text-slate-900 mb-2">Kalender Kegiatan Nasional (contoh)</h2>
                <div class="overflow-x-auto rounded-lg border border-slate-200 bg-white">
                    <table class="min-w-full text-sm">
                        <thead class="bg-slate-50 text-slate-700">
                            <tr>
                                <th scope="col" class="px-3 py-2 text-left font-semibold">Tanggal</th>
                                <th scope="col" class="px-3 py-2 text-left font-semibold">Kegiatan</th>
                                <th scope="col" class="px-3 py-2 text-left font-semibold">Lokasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($events as $event)
                                <tr class="border-t border-slate-100">
                                    <td class="px-3 py-2 whitespace-nowrap text-slate-800">
                                        {{ \Illuminate\Support\Carbon::parse($event['date'])->translatedFormat('d M Y') }}
                                    </td>
                                    <td class="px-3 py-2 text-slate-800">
                                        {{ $event['title'] }}
                                    </td>
                                    <td class="px-3 py-2 text-slate-700">
                                        {{ $event['location'] }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="px-3 py-3 text-center text-slate-500">
                                        Jadwal kegiatan akan segera diumumkan.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        {{-- Formulir penyelenggara disembunyikan sementara sesuai permintaan --}}
    </div>
@endsection


