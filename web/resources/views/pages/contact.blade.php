@extends('layouts.app')

@section('title', 'Kontak & Helpdesk Program Pemagangan Nasional')
@section('meta_description', 'Informasi kontak resmi, helpdesk, dan formulir pengaduan/pertanyaan terkait Program Pemagangan Nasional.')

@section('page_header')
    <div>
        <p class="text-xs font-semibold tracking-wide text-sky-800 uppercase mb-1">
            Kontak &amp; Helpdesk
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            Kontak Resmi Program Pemagangan Nasional
        </h1>
        <p class="mt-2 text-sm text-slate-700 max-w-3xl">
            Silakan hubungi kami untuk informasi lebih lanjut, pengaduan, atau masukan terkait penyelenggaraan
            Program Pemagangan Nasional.
        </p>
    </div>
@endsection

@section('content')
    <div class="grid gap-8 lg:grid-cols-[1.4fr,2fr]">
        <section aria-label="Informasi kontak">
            <div class="rounded-lg border border-slate-200 bg-white p-4 text-sm space-y-3">
                <div>
                    <h2 class="text-sm font-semibold text-slate-900">Call Center</h2>
                    <p class="text-slate-700">{{ $contactInfo['call_center'] }}</p>
                </div>
                <div>
                    <h2 class="text-sm font-semibold text-slate-900">Email Resmi</h2>
                    <p class="text-slate-700">{{ $contactInfo['email'] }}</p>
                </div>
                <div>
                    <h2 class="text-sm font-semibold text-slate-900">Alamat Kantor</h2>
                    <p class="text-slate-700">{{ $contactInfo['address'] }}</p>
                </div>
                <div>
                    <h2 class="text-sm font-semibold text-slate-900">Jam Layanan</h2>
                    <p class="text-slate-700">{{ $contactInfo['office_hours'] }}</p>
                </div>
                <div>
                    <h2 class="text-sm font-semibold text-slate-900">FAQ Navigasi Situs</h2>
                    <p class="text-slate-700">
                        Pertanyaan umum terkait penggunaan situs dan akses layanan akan dirangkum dalam
                        halaman FAQ navigasi yang dapat diperbarui secara berkala.
                    </p>
                </div>
            </div>
        </section>

        <section aria-label="Formulir kontak" class="text-sm">
            <div class="rounded-lg border border-slate-200 bg-white p-4">
                <h2 class="text-sm font-semibold text-slate-900 mb-2">
                    Formulir Pengaduan / Pertanyaan
                </h2>
                <p class="text-xs text-slate-600 mb-3">
                    Gunakan formulir ini untuk menyampaikan pertanyaan, pengaduan, atau saran. Data yang Anda kirim
                    akan diperlakukan sesuai dengan kebijakan privasi Kemnaker.
                </p>

                <form method="POST" action="{{ route('contact.store') }}" novalidate>
                    @csrf
                    <div class="space-y-3">
                        <div>
                            <label for="name" class="block text-slate-800 font-semibold">
                                Nama Lengkap
                            </label>
                            <input id="name" name="name" type="text"
                                   class="mt-1 block w-full rounded border border-slate-300 px-3 py-1.5 text-sm focus:border-sky-500 focus:ring-sky-500"
                                   value="{{ old('name') }}" required>
                            @error('name')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-slate-800 font-semibold">
                                Email
                            </label>
                            <input id="email" name="email" type="email"
                                   class="mt-1 block w-full rounded border border-slate-300 px-3 py-1.5 text-sm focus:border-sky-500 focus:ring-sky-500"
                                   value="{{ old('email') }}" required>
                            @error('email')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="topic" class="block text-slate-800 font-semibold">
                                Topik
                            </label>
                            <input id="topic" name="topic" type="text"
                                   class="mt-1 block w-full rounded border border-slate-300 px-3 py-1.5 text-sm focus:border-sky-500 focus:ring-sky-500"
                                   value="{{ old('topic') }}" required>
                            @error('topic')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-slate-800 font-semibold">
                                Pesan
                            </label>
                            <textarea id="message" name="message" rows="4"
                                      class="mt-1 block w-full rounded border border-slate-300 px-3 py-1.5 text-sm focus:border-sky-500 focus:ring-sky-500"
                                      required>{{ old('message') }}</textarea>
                            @error('message')
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
                                Kirim Pesan
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <p class="mt-3 text-xs text-slate-600">
                Opsi chat langsung / chatbot daring dapat diintegrasikan melalui widget pihak ketiga atau
                solusi internal Kemnaker dan ditampilkan pada sisi kanan bawah laman ini.
            </p>
        </section>
    </div>
@endsection


