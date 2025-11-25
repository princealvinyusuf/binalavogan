<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Program Pemagangan Nasional | BINALAVOGAN')</title>
    <meta name="description" content="@yield('meta_description', 'Portal resmi Direktorat Bina Penyelenggaraan Pelatihan Vokasi dan Pemagangan (BINALAVOGAN) untuk Program Pemagangan Nasional di bawah Ditjen Binalavotas, Kementerian Ketenagakerjaan RI.')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Basic SEO keywords --}}
    <meta name="keywords" content="pemagangan nasional, magang pemerintah, Binalavotas, Kemnaker, pemagangan, vokasi">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('og_title', 'Program Pemagangan Nasional | BINALAVOGAN')">
    <meta property="og:description" content="@yield('og_description', 'Informasi resmi Program Pemagangan Nasional Kemnaker.')">
    <meta property="og:type" content="website">

    {{-- Styles / Scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Google Analytics 4 placeholder --}}
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-XXXXXXXXXX');
    </script> --}}
</head>
<body class="min-h-screen bg-slate-50 text-slate-900 flex flex-col">
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 bg-white text-sky-800 px-3 py-2 rounded shadow">
        Lewati ke konten utama
    </a>

    <header class="border-b bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-3 flex items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <div class="h-10 w-10 rounded-full bg-sky-800 flex items-center justify-center text-white text-xs font-semibold">
                    ID
                </div>
                <div>
                    <p class="text-xs font-semibold text-slate-700 uppercase tracking-wide">
                        Kementerian Ketenagakerjaan Republik Indonesia
                    </p>
                    <p class="text-sm font-semibold text-slate-900">
                        Ditjen Binalavotas – Direktorat BINALAVOGAN
                    </p>
                </div>
            </div>

            <nav class="hidden md:flex items-center gap-4 text-sm" aria-label="Navigasi utama">
                <a href="{{ route('home') }}" class="px-2 py-1 rounded hover:bg-slate-100 @if(request()->routeIs('home')) font-semibold text-sky-800 @endif">
                    Beranda
                </a>
                <a href="{{ route('about') }}" class="px-2 py-1 rounded hover:bg-slate-100 @if(request()->routeIs('about')) font-semibold text-sky-800 @endif">
                    Tentang Direktorat
                </a>
                <a href="{{ route('program.index') }}" class="px-2 py-1 rounded hover:bg-slate-100 @if(request()->routeIs('program.*')) font-semibold text-sky-800 @endif">
                    Program Pemagangan Nasional
                </a>
                <a href="{{ route('registration.index') }}" class="px-2 py-1 rounded hover:bg-slate-100 @if(request()->routeIs('registration.*')) font-semibold text-sky-800 @endif">
                    Pendaftaran
                </a>
                <a href="{{ route('statistics.public') }}" class="px-2 py-1 rounded hover:bg-slate-100 @if(request()->routeIs('statistics.*')) font-semibold text-sky-800 @endif">
                    Statistik
                </a>
                <a href="{{ route('stories.index') }}" class="px-2 py-1 rounded hover:bg-slate-100 @if(request()->routeIs('stories.*')) font-semibold text-sky-800 @endif">
                    Cerita Sukses
                </a>
                <a href="{{ route('documents.index') }}" class="px-2 py-1 rounded hover:bg-slate-100 @if(request()->routeIs('documents.*')) font-semibold text-sky-800 @endif">
                    Dokumen
                </a>
                <a href="{{ route('contact.index') }}" class="px-2 py-1 rounded hover:bg-slate-100 @if(request()->routeIs('contact.*')) font-semibold text-sky-800 @endif">
                    Kontak
                </a>
            </nav>

            <div class="flex items-center gap-3">
                <div class="inline-flex rounded border border-slate-200 overflow-hidden text-xs" aria-label="Pengaturan bahasa">
                    <a href="{{ route('locale.switch', ['locale' => 'id']) }}" class="px-2 py-1 @if(app()->getLocale() === 'id') bg-sky-800 text-white @else bg-white text-slate-700 hover:bg-slate-100 @endif">
                        ID
                    </a>
                    <a href="{{ route('locale.switch', ['locale' => 'en']) }}" class="px-2 py-1 @if(app()->getLocale() === 'en') bg-sky-800 text-white @else bg-white text-slate-700 hover:bg-slate-100 @endif">
                        EN
                    </a>
                </div>
                @auth
                    <a href="{{ route('dashboard.internal') }}" class="hidden sm:inline-flex items-center px-3 py-1.5 rounded text-xs font-semibold text-white bg-sky-800 hover:bg-sky-900">
                        Dashboard Internal
                    </a>
                @endauth
            </div>
        </div>
    </header>

    <main id="main-content" class="flex-1">
        @hasSection('page_header')
            <section class="bg-slate-100 border-b">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 py-6">
                    @yield('page_header')
                </div>
            </section>
        @endif

        <section class="max-w-6xl mx-auto px-4 sm:px-6 py-8">
            @if (session('status'))
                <div class="mb-4 rounded border border-emerald-300 bg-emerald-50 text-emerald-900 px-4 py-3 text-sm" role="status">
                    {{ session('status') }}
                </div>
            @endif

            @yield('content')
        </section>
    </main>

    <footer class="border-t bg-slate-900 text-slate-200 text-sm">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-6 grid gap-6 md:grid-cols-3">
            <div>
                <p class="font-semibold text-white">Direktorat BINALAVOGAN</p>
                <p class="mt-1">
                    Direktorat Bina Penyelenggaraan Pelatihan Vokasi dan Pemagangan<br>
                    Ditjen Binalavotas, Kementerian Ketenagakerjaan RI
                </p>
            </div>
            <div>
                <p class="font-semibold text-white">Kontak</p>
                <p class="mt-1">
                    Call Center: 1500-630<br>
                    Email: binalavogan@kemnaker.go.id
                </p>
            </div>
            <div>
                <p class="font-semibold text-white">Tautan Terkait</p>
                <ul class="mt-1 space-y-1">
                    <li><a class="hover:underline" href="https://kemnaker.go.id" target="_blank" rel="noopener">Portal Kemnaker</a></li>
                    <li><a class="hover:underline" href="https://maganghub.kemnaker.go.id" target="_blank" rel="noopener">MagangHub</a></li>
                    <li><a class="hover:underline" href="{{ route('privacy') }}">Kebijakan Privasi</a></li>
                    <li><a class="hover:underline" href="{{ route('terms') }}">Syarat &amp; Ketentuan</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-slate-800 py-3 text-xs text-center text-slate-400">
            &copy; {{ date('Y') }} Kementerian Ketenagakerjaan Republik Indonesia. Seluruh hak cipta dilindungi.
        </div>
    </footer>
</body>
</html>


