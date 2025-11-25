@extends('layouts.app')

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

        <aside id="industri" class="space-y-4" aria-label="Formulir pendaftaran industri">
            <div class="rounded-lg border border-slate-200 bg-white p-4">
                <h2 class="text-sm font-semibold text-slate-900 mb-2">
                    Formulir Minat Industri / BLK / LPK
                </h2>
                <p class="text-xs text-slate-600 mb-3">
                    Formulir ini digunakan untuk mengumpulkan minat awal industri dan lembaga pelatihan
                    yang ingin menjadi penyelenggara pemagangan nasional. Tim BINALAVOGAN akan menindaklanjuti
                    melalui kontak yang tersedia.
                </p>

                <form method="POST" action="{{ route('registration.industry.store') }}" novalidate>
                    @csrf
                    <div class="space-y-3 text-sm">
                        <div>
                            <label for="company_name" class="block text-slate-800 font-semibold">
                                Nama Perusahaan / Lembaga
                            </label>
                            <input id="company_name" name="company_name" type="text"
                                   class="mt-1 block w-full rounded border border-slate-300 px-3 py-1.5 text-sm focus:border-sky-500 focus:ring-sky-500"
                                   value="{{ old('company_name') }}" required>
                            @error('company_name')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="sector" class="block text-slate-800 font-semibold">
                                Sektor Industri
                            </label>
                            <input id="sector" name="sector" type="text"
                                   class="mt-1 block w-full rounded border border-slate-300 px-3 py-1.5 text-sm focus:border-sky-500 focus:ring-sky-500"
                                   value="{{ old('sector') }}" required>
                            @error('sector')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="province" class="block text-slate-800 font-semibold">
                                Provinsi Lokasi Utama
                            </label>
                            <input id="province" name="province" type="text"
                                   class="mt-1 block w-full rounded border border-slate-300 px-3 py-1.5 text-sm focus:border-sky-500 focus:ring-sky-500"
                                   value="{{ old('province') }}" required>
                            @error('province')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="pic_name" class="block text-slate-800 font-semibold">
                                Nama PIC
                            </label>
                            <input id="pic_name" name="pic_name" type="text"
                                   class="mt-1 block w-full rounded border border-slate-300 px-3 py-1.5 text-sm focus:border-sky-500 focus:ring-sky-500"
                                   value="{{ old('pic_name') }}" required>
                            @error('pic_name')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="pic_email" class="block text-slate-800 font-semibold">
                                Email PIC
                            </label>
                            <input id="pic_email" name="pic_email" type="email"
                                   class="mt-1 block w-full rounded border border-slate-300 px-3 py-1.5 text-sm focus:border-sky-500 focus:ring-sky-500"
                                   value="{{ old('pic_email') }}" required>
                            @error('pic_email')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="slots" class="block text-slate-800 font-semibold">
                                Perkiraan Kuota Slot Pemagangan
                            </label>
                            <input id="slots" name="slots" type="number" min="1"
                                   class="mt-1 block w-full rounded border border-slate-300 px-3 py-1.5 text-sm focus:border-sky-500 focus:ring-sky-500"
                                   value="{{ old('slots') }}" required>
                            @error('slots')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="notes" class="block text-slate-800 font-semibold">
                                Catatan Tambahan (opsional)
                            </label>
                            <textarea id="notes" name="notes" rows="3"
                                      class="mt-1 block w-full rounded border border-slate-300 px-3 py-1.5 text-sm focus:border-sky-500 focus:ring-sky-500">{{ old('notes') }}</textarea>
                            @error('notes')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Placeholder CAPTCHA --}}
                        <div>
                            <p class="text-xs text-slate-600">
                                CAPTCHA / verifikasi keamanan akan ditempatkan di sini pada lingkungan produksi.
                            </p>
                        </div>

                        <div class="pt-2">
                            <button type="submit"
                                    class="inline-flex items-center px-4 py-2 rounded text-sm font-semibold text-white bg-sky-800 hover:bg-sky-900">
                                Kirim Formulir Minat
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </aside>
    </div>
@endsection


