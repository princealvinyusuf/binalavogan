<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Program Pemagangan Nasional | BINALAVOGAN')</title>
    <meta name="description" content="@yield('meta_description', 'Portal resmi Direktorat Bina Penyelenggaraan Pelatihan Vokasi dan Pemagangan (BINALAVOGAN).')">
    <link rel="icon" type="image/png" href="{{ asset('logo_kemnaker.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('logo_kemnaker.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#f4f6fb] text-slate-900 flex flex-col">
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 bg-white text-sky-900 px-3 py-2 rounded shadow">
        Lewati ke konten utama
    </a>

    <header class="bg-white/80 backdrop-blur border-b border-slate-200/70 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-4 flex items-center justify-between gap-6">
            <div class="flex items-center gap-3">
                <img src="{{ asset('logo_kemnaker.png') }}" alt="Logo Kemnaker" class="h-11 w-11 rounded-2xl shadow-inner object-contain bg-white p-1">
                <div>
                    <p class="text-[11px] font-semibold text-slate-500 uppercase tracking-[0.18em]">
                        Kementerian Ketenagakerjaan RI
                    </p>
                    <p class="text-sm font-semibold text-slate-900">
                        Ditjen Binalavotas · Direktorat BINALAVOGAN
                    </p>
                </div>
            </div>

            <nav class="hidden lg:flex items-center gap-1 text-sm font-semibold" aria-label="Navigasi utama">
                @php
                    $links = [
                        ['label' => 'Beranda', 'route' => 'home'],
                        ['label' => 'Statistik Pemagangan Nasional', 'route' => 'statistics.public'],
                        ['label' => 'Publikasi', 'route' => 'documents.index'],
                        ['label' => 'Pendaftaran', 'route' => 'registration.index'],
                        ['label' => 'Cerita Sukses', 'route' => 'stories.index'],
                        ['label' => 'Tentang', 'route' => 'about'],
                    ];
                @endphp
                @foreach($links as $link)
                    <a href="{{ route($link['route']) }}"
                       class="px-3 py-2 rounded-full transition-colors @if(request()->routeIs($link['route'].'*')) text-sky-900 bg-sky-100 @else text-slate-500 hover:text-slate-900 hover:bg-slate-100 @endif">
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </nav>

            <div class="flex items-center gap-3">
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="hidden sm:inline-flex items-center rounded-full bg-sky-900 text-white text-xs font-semibold px-4 py-2 shadow hover:bg-sky-800">
                        Dashboard Internal
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <main id="main-content" class="flex-1">
        @hasSection('page_header')
            <section class="bg-gradient-to-r from-sky-100/40 to-cyan-50/30 border-b border-slate-200/60">
                <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-8">
                    @yield('page_header')
                </div>
            </section>
        @endif

        <section class="max-w-7xl mx-auto w-full px-5 sm:px-6 lg:px-8 py-10">
            @if (session('status'))
                <div class="mb-4 rounded-2xl border border-emerald-200 bg-emerald-50 text-emerald-900 px-4 py-3 text-sm shadow-sm" role="status">
                    {{ session('status') }}
                </div>
            @endif

            @yield('content')
        </section>
    </main>

    <footer class="mt-10 border-t border-slate-200 bg-white text-sm">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-8 grid gap-6 md:grid-cols-3">
            <div>
                <p class="text-xs font-semibold text-slate-500 uppercase tracking-[0.2em]">BINALAVOGAN</p>
                <p class="mt-2 text-sm font-semibold text-slate-900">
                    Direktorat Bina Penyelenggaraan Pelatihan Vokasi dan Pemagangan
                </p>
                <p class="mt-1 text-slate-600">
                    Ditjen Binalavotas, Kementerian Ketenagakerjaan RI
                </p>
            </div>
            <div>
                <p class="font-semibold text-slate-900">Kontak</p>
                <p class="mt-2 text-slate-600">
                    Call Center: 1500-630<br>
                    Email: binalavogan@kemnaker.go.id
                </p>
            </div>
            <div>
                <p class="font-semibold text-slate-900">Tautan Terkait</p>
                <ul class="mt-2 space-y-1 text-slate-600">
                    <li><a class="hover:text-slate-900" href="https://kemnaker.go.id" target="_blank" rel="noopener">Portal Kemnaker</a></li>
                    <li><a class="hover:text-slate-900" href="https://maganghub.kemnaker.go.id" target="_blank" rel="noopener">MagangHub</a></li>
                    <li><a class="hover:text-slate-900" href="{{ route('privacy') }}">Kebijakan Privasi</a></li>
                    <li><a class="hover:text-slate-900" href="{{ route('terms') }}">Syarat &amp; Ketentuan</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-slate-200 py-3 text-xs text-center text-slate-500">
            &copy; {{ date('Y') }} Kementerian Ketenagakerjaan Republik Indonesia. Seluruh hak cipta dilindungi.
        </div>
    </footer>
</body>
</html>


