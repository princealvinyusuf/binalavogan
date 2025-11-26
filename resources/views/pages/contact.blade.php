@extends('layouts.public')

@section('title', 'Kontak & Helpdesk Program Pemagangan Nasional')
@section('meta_description', 'Informasi kontak resmi, helpdesk, dan formulir pengaduan/pertanyaan terkait Program Pemagangan Nasional.')

@section('page_header')
    <div class="space-y-3">
        <p class="text-[11px] font-semibold tracking-[0.25em] uppercase text-cyan-700">
            Kontak &amp; Helpdesk
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900">
            Kontak Resmi Program Pemagangan Nasional
        </h1>
        <p class="text-sm text-slate-700 max-w-3xl">
            Silakan hubungi kami untuk informasi lebih lanjut, pengaduan, atau masukan terkait penyelenggaraan Program Pemagangan Nasional.
        </p>
    </div>
@endsection

@section('content')
    <div class="grid gap-8 lg:grid-cols-[1.4fr,2fr]">
        <section aria-label="Informasi kontak">
            <div class="rounded-3xl bg-white border border-slate-100 p-6 shadow-sm text-sm space-y-4">
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
        </section>

        <section aria-label="Formulir kontak" class="text-sm">
            <div class="rounded-3xl bg-white border border-slate-100 p-6 shadow-sm">
                <h2 class="text-base font-semibold text-slate-900 mb-2">
                    Formulir Pengaduan / Pertanyaan
                </h2>
                <p class="text-xs text-slate-500 mb-3">
                    Gunakan formulir ini untuk menyampaikan pertanyaan, pengaduan, atau saran. Data akan diperlakukan sesuai kebijakan privasi Kemnaker.
                </p>

                <form method="POST" action="{{ route('contact.store') }}" novalidate class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                            Nama Lengkap
                        </label>
                        <input id="name" name="name" type="text"
                               class="mt-1 block w-full rounded-2xl border border-slate-200 px-3 py-2 text-sm focus:border-sky-500 focus:ring-sky-500"
                               value="{{ old('name') }}" required>
                        @error('name')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                            Email
                        </label>
                        <input id="email" name="email" type="email"
                               class="mt-1 block w-full rounded-2xl border border-slate-200 px-3 py-2 text-sm focus:border-sky-500 focus:ring-sky-500"
                               value="{{ old('email') }}" required>
                        @error('email')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="topic" class="block text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                            Topik
                        </label>
                        <input id="topic" name="topic" type="text"
                               class="mt-1 block w-full rounded-2xl border border-slate-200 px-3 py-2 text-sm focus:border-sky-500 focus:ring-sky-500"
                               value="{{ old('topic') }}" required>
                        @error('topic')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="message" class="block text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">
                            Pesan
                        </label>
                        <textarea id="message" name="message" rows="4"
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
            </div>

            <p class="mt-3 text-xs text-slate-500">
                Opsi chat langsung / chatbot daring dapat diintegrasikan melalui widget pihak ketiga atau solusi internal Kemnaker.
            </p>
        </section>
    </div>
@endsection


