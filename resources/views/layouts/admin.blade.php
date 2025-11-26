<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin | BINALAVOGAN')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-slate-900 border-r border-slate-800 hidden md:flex flex-col">
            <div class="px-6 py-6 border-b border-slate-800">
                <p class="text-xs font-semibold tracking-[0.3em] text-cyan-300 uppercase">Admin Panel</p>
                <p class="text-lg font-semibold text-white">BINALAVOGAN</p>
            </div>
            <nav class="flex-1 px-4 py-6 space-y-2 text-sm">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2 rounded-xl px-3 py-2 @if(request()->routeIs('admin.dashboard')) bg-slate-800 text-white @else text-slate-300 hover:bg-slate-800 @endif">
                    Dashboard
                </a>
                <a href="{{ route('admin.industries.index') }}" class="flex items-center gap-2 rounded-xl px-3 py-2 @if(request()->routeIs('admin.industries.*')) bg-slate-800 text-white @else text-slate-300 hover:bg-slate-800 @endif">
                    Industri &amp; Penyelenggara
                </a>
                <a href="{{ route('admin.statistics.index') }}" class="flex items-center gap-2 rounded-xl px-3 py-2 @if(request()->routeIs('admin.statistics.*')) bg-slate-800 text-white @else text-slate-300 hover:bg-slate-800 @endif">
                    Statistik Pemagangan
                </a>
            </nav>
            <div class="px-4 py-4 border-t border-slate-800 text-xs text-slate-500">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full rounded-xl border border-slate-700 px-3 py-2 text-slate-200 hover:bg-slate-800">
                        Keluar
                    </button>
                </form>
            </div>
        </aside>
        <main class="flex-1">
            <header class="bg-slate-900/70 border-b border-slate-800 px-4 sm:px-6 py-4 flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-cyan-300 uppercase tracking-[0.3em]">Panel Admin</p>
                    <h1 class="text-lg font-semibold text-white">@yield('header')</h1>
                </div>
                <div class="text-sm text-slate-400">
                    {{ auth()->user()->name ?? 'Admin' }}
                </div>
            </header>
            <section class="p-4 sm:p-6 space-y-6">
                @if (session('status'))
                    <div class="rounded-xl border border-emerald-400 bg-emerald-400/10 text-emerald-200 px-4 py-3 text-sm">
                        {{ session('status') }}
                    </div>
                @endif
                @yield('content')
            </section>
        </main>
    </div>
</body>
</html>


