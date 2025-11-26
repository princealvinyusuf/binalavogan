@extends('layouts.admin')

@section('title', 'Admin | Statistik')
@section('header', 'Statistik Pemagangan Nasional')

@section('content')
    <div class="rounded-2xl bg-slate-900 border border-slate-800 p-4">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-sm font-semibold text-white">Snapshot Statistik</h2>
            <span class="text-xs text-slate-400">Total: {{ $snapshots->total() }}</span>
        </div>
        <div class="overflow-x-auto rounded-xl border border-slate-800">
            <table class="min-w-full text-xs">
                <thead class="bg-slate-800 text-slate-300">
                    <tr>
                        <th class="px-3 py-2 text-left font-semibold">Batch</th>
                        <th class="px-3 py-2 text-left font-semibold">Provinsi</th>
                        <th class="px-3 py-2 text-left font-semibold">Periode</th>
                        <th class="px-3 py-2 text-right font-semibold">Pendaftar</th>
                        <th class="px-3 py-2 text-right font-semibold">Diterima</th>
                        <th class="px-3 py-2 text-right font-semibold">Selesai</th>
                        <th class="px-3 py-2 text-right font-semibold">Penempatan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800">
                    @forelse($snapshots as $snapshot)
                        <tr>
                            <td class="px-3 py-2 text-white">{{ $snapshot->batch }}</td>
                            <td class="px-3 py-2 text-slate-300">{{ $snapshot->province ?? 'Nasional' }}</td>
                            <td class="px-3 py-2 text-slate-300">
                                {{ optional($snapshot->period_start)->format('d M Y') }} -
                                {{ optional($snapshot->period_end)->format('d M Y') }}
                            </td>
                            <td class="px-3 py-2 text-right text-slate-300">{{ number_format($snapshot->applicants) }}</td>
                            <td class="px-3 py-2 text-right text-slate-300">{{ number_format($snapshot->accepted) }}</td>
                            <td class="px-3 py-2 text-right text-slate-300">{{ number_format($snapshot->completed) }}</td>
                            <td class="px-3 py-2 text-right text-slate-300">{{ number_format($snapshot->placed) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-3 py-3 text-center text-slate-500">
                                Belum ada snapshot statistik.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $snapshots->links() }}
        </div>
    </div>
@endsection


