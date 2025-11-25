@extends('layouts.app')

@section('title', 'Pendaftaran Program Pemagangan Nasional')
@section('meta_description', 'Informasi dan formulir pendaftaran untuk peserta dan industri penyelenggara Program Pemagangan Nasional.')

@section('page_header')
    <div class="space-y-3">
        <p class="text-[11px] font-semibold tracking-[0.25em] uppercase text-cyan-700">
            Pendaftaran Program Pemagangan Nasional
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            Akses pendaftaran peserta dan penyelenggara pemagangan
        </h1>
        <p class="text-sm text-slate-700 max-w-3xl">
            Peserta mendaftar melalui MagangHub Kemnaker. Perusahaan, BLK, dan LPK dapat mengisi formulir minat
            untuk menjadi tuan rumah pemagangan nasional.
        </p>
    </div>
@endsection

@section('content')
    <div class="grid gap-8 lg:grid-cols-[minmax(0,2fr)_minmax(0,1.2fr)]">
        <section class="space-y-8">
            <div class="rounded-3xl bg-white border border-slate-100 shadow-sm p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-semibold text-slate-900">Roadmap Proses Seleksi</h2>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-[0.2em]">Journey</span>
                </div>
                <ol class="mt-4 grid gap-4 sm:grid-cols-2 text-sm">
                    @foreach($roadmapSteps as $step)
                        <li class="rounded-2xl border border-slate-100 bg-slate-50/80 p-4">
                            <p class="text-[11px] font-semibold uppercase tracking-[0.2em] text-sky-700">
                                Tahap {{ $step['step'] }}
                            </p>
                            <p class="mt-1 font-semibold text-slate-900">
                                {{ $step['title'] }}
                            </p>
                            <p class="mt-1 text-slate-600">
                                {{ $step['description'] }}
                            </p>
                        </li>
                    @endforeach
                </ol>
            </div>

            <div id="peserta" class="rounded-3xl bg-white border border-slate-100 shadow-sm p-6 space-y-3">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-semibold text-slate-900">Pendaftaran Peserta via MagangHub</h2>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-[0.2em]">Participants</span>
                </div>
                <p class="text-sm text-slate-600">
                    Calon peserta membuat akun, mengunggah profil, memilih sektor industri, dan mengikuti proses seleksi pada
                    platform <strong>MagangHub</strong>.
                </p>
                <a href="{{ $magangHubUrl }}" target="_blank" rel="noopener"
                   class="inline-flex items-center rounded-full bg-sky-900 text-white text-sm font-semibold px-5 py-2 shadow hover:bg-sky-800">
                    Masuk ke MagangHub
                    <span class="ml-2" aria-hidden="true">↗</span>
                </a>
                <p class="text-xs text-slate-500">
                    Tautan membuka laman eksternal MagangHub Kemnaker.
                </p>
            </div>

            <div id="kalender" class="rounded-3xl bg-white border border-slate-100 shadow-sm p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-semibold text-slate-900">Kalender Kegiatan Nasional (contoh)</h2>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-[0.2em]">Schedule</span>
                </div>
                <div class="mt-4 overflow-x-auto rounded-2xl border border-slate-100">
                    <table class="min-w-full text-sm">
                        <thead class="bg-slate-50 text-slate-600">
                            <tr>
                                <th scope="col" class="px-4 py-2 text-left font-semibold">Tanggal</th>
                                <th scope="col" class="px-4 py-2 text-left font-semibold">Kegiatan</th>
                                <th scope="col" class="px-4 py-2 text-left font-semibold">Lokasi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($events as $event)
                                <tr class="bg-white">
                                    <td class="px-4 py-3 whitespace-nowrap text-slate-900 font-semibold">
                                        {{ \Illuminate\Support\Carbon::parse($event['date'])->translatedFormat('d M Y') }}
                                    </td>
                                    <td class="px-4 py-3 text-slate-700">
                                        {{ $event['title'] }}
                                    </td>
                                    <td class="px-4 py-3 text-slate-600">
                                        {{ $event['location'] }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="px-4 py-4 text-center text-slate-500">
                                        Jadwal kegiatan akan segera diumumkan.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <aside id="industri" class="space-y-5" aria-label="Formulir pendaftaran industri">
            <div class="rounded-3xl bg-gradient-to-br from-slate-900 to-sky-900 text-white p-6 shadow-xl">
                <p class="text-xs font-semibold tracking-[0.3em] text-cyan-200 uppercase">Penyelenggara Pemagangan</p>
                <p class="mt-3 text-sm text-slate-100">
                    Formulir minat untuk perusahaan, BLK, dan LPK yang ingin membuka slot pemagangan nasional.
                </p>
                <p class="mt-2 text-xs text-slate-200">
                    Tim BINALAVOGAN akan menghubungi PIC untuk validasi dokumen &amp; onboarding program.
                </p>
            </div>

            <div class="rounded-3xl bg-white border border-slate-100 shadow-sm p-6">
                <form method="POST" action="{{ route('registration.industry.store') }}" novalidate class="space-y-4 text-sm">
                    @csrf
                    <div>
                        <label for="company_name" class="block text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                            Nama Perusahaan / Lembaga
                        </label>
                        <input id="company_name" name="company_name" type="text"
                               class="mt-1 block w-full rounded-2xl border border-slate-200 px-3 py-2 focus:border-sky-500 focus:ring-sky-500 text-sm"
                               value="{{ old('company_name') }}" required>
                        @error('company_name')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="sector" class="block text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                            Sektor Industri
                        </label>
                        <input id="sector" name="sector" type="text"
                               class="mt-1 block w-full rounded-2xl border border-slate-200 px-3 py-2 focus:border-sky-500 focus:ring-sky-500 text-sm"
                               value="{{ old('sector') }}" required>
                        @error('sector')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="province" class="block text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                            Provinsi Lokasi Utama
                        </label>
                        <input id="province" name="province" type="text"
                               class="mt-1 block w-full rounded-2xl border border-slate-200 px-3 py-2 focus:border-sky-500 focus:ring-sky-500 text-sm"
                               value="{{ old('province') }}" required>
                        @error('province')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="pic_name" class="block text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                            Nama PIC
                        </label>
                        <input id="pic_name" name="pic_name" type="text"
                               class="mt-1 block w-full rounded-2xl border border-slate-200 px-3 py-2 focus:border-sky-500 focus:ring-sky-500 text-sm"
                               value="{{ old('pic_name') }}" required>
                        @error('pic_name')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="pic_email" class="block text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                            Email PIC
                        </label>
                        <input id="pic_email" name="pic_email" type="email"
                               class="mt-1 block w-full rounded-2xl border border-slate-200 px-3 py-2 focus:border-sky-500 focus:ring-sky-500 text-sm"
                               value="{{ old('pic_email') }}" required>
                        @error('pic_email')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="slots" class="block text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                            Perkiraan Kuota Slot Pemagangan
                        </label>
                        <input id="slots" name="slots" type="number" min="1"
                               class="mt-1 block w-full rounded-2xl border border-slate-200 px-3 py-2 focus:border-sky-500 focus:ring-sky-500 text-sm"
                               value="{{ old('slots') }}" required>
                        @error('slots')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="notes" class="block text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                            Catatan Tambahan (opsional)
                        </label>
                        <textarea id="notes" name="notes" rows="3"
                                  class="mt-1 block w-full rounded-2xl border border-slate-200 px-3 py-2 focus:border-sky-500 focus:ring-sky-500 text-sm">{{ old('notes') }}</textarea>
                        @error('notes')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <p class="text-xs text-slate-500">
                            CAPTCHA/verifikasi keamanan akan ditambahkan pada lingkungan produksi.
                        </p>
                    </div>

                    <div class="pt-2">
                        <button type="submit"
                                class="inline-flex items-center rounded-full bg-sky-900 text-white text-sm font-semibold px-5 py-2 shadow hover:bg-sky-800">
                            Kirim Formulir Minat
                        </button>
                    </div>
                </form>
            </div>
        </aside>
    </div>
@endsection


