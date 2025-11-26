@extends('layouts.admin')

@section('title', 'Admin | Dashboard')
@section('header', 'Dashboard')

@section('content')
    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
        @foreach($kpis as $kpi)
            <div class="rounded-2xl bg-slate-900 border border-slate-800 p-4">
                <p class="text-xs uppercase tracking-[0.3em] text-slate-400">{{ $kpi['label'] }}</p>
                <p class="mt-2 text-2xl font-semibold text-white">
                    {{ $kpi['value'] }}
                </p>
            </div>
        @endforeach
    </div>

    <div class="grid gap-6 lg:grid-cols-2">
        <div class="rounded-2xl bg-slate-900 border border-slate-800 p-4">
            <div class="flex items-center justify-between mb-3">
                <h2 class="text-sm font-semibold text-white">Pendaftaran Industri Terbaru</h2>
                <a href="{{ route('admin.industries.index') }}" class="text-xs text-cyan-300">Lihat semua</a>
            </div>
            <div class="space-y-3 text-sm">
                @forelse($latestIndustries as $industry)
                    <div class="rounded-xl border border-slate-800 px-3 py-2">
                        <p class="font-semibold text-white">{{ $industry->company_name }}</p>
                        <p class="text-slate-400 text-xs">{{ $industry->sector }} • {{ $industry->province }}</p>
                    </div>
                @empty
                    <p class="text-slate-500 text-sm">Belum ada data industri.</p>
                @endforelse
            </div>
        </div>

        <div class="rounded-2xl bg-slate-900 border border-slate-800 p-4">
            <div class="flex items-center justify-between mb-3">
                <h2 class="text-sm font-semibold text-white">Snapshot Statistik Terkini</h2>
                <a href="{{ route('admin.statistics.index') }}" class="text-xs text-cyan-300">Lihat semua</a>
            </div>
            <div class="space-y-3 text-sm">
                @forelse($latestSnapshots as $snapshot)
                    <div class="rounded-xl border border-slate-800 px-3 py-2">
                        <p class="font-semibold text-white">Batch {{ $snapshot->batch }}</p>
                        <p class="text-slate-400 text-xs">{{ $snapshot->province ?? 'Nasional' }} • {{ optional($snapshot->period_start)->format('d M Y') }}</p>
                    </div>
                @empty
                    <p class="text-slate-500 text-sm">Belum ada data statistik.</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection


