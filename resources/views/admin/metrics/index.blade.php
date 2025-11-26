@extends('layouts.admin')

@section('title', 'Admin | Statistik Ringkas')
@section('header', 'Statistik Ringkas Beranda')

@section('content')
    <div class="rounded-2xl bg-slate-900 border border-slate-800 p-4">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-sm font-semibold text-white">Metrics</h2>
            <a href="{{ route('admin.metrics.create') }}" class="inline-flex items-center rounded-full bg-cyan-500 text-xs font-semibold px-4 py-2 text-slate-900">
                Tambah Metric
            </a>
        </div>
        <div class="overflow-x-auto rounded-xl border border-slate-800">
            <table class="min-w-full text-xs">
                <thead class="bg-slate-800 text-slate-300">
                    <tr>
                        <th class="px-3 py-2 text-left font-semibold">Label</th>
                        <th class="px-3 py-2 text-left font-semibold">Nilai</th>
                        <th class="px-3 py-2 text-right font-semibold">Urutan</th>
                        <th class="px-3 py-2 text-right font-semibold"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800">
                    @forelse($metrics as $metric)
                        <tr>
                            <td class="px-3 py-2 text-white">{{ $metric->label }}</td>
                            <td class="px-3 py-2 text-slate-300">{{ $metric->value }}</td>
                            <td class="px-3 py-2 text-right text-slate-300">{{ $metric->order_column }}</td>
                            <td class="px-3 py-2 text-right text-slate-300">
                                <a href="{{ route('admin.metrics.edit', $metric) }}" class="text-cyan-300 text-xs mr-3">Edit</a>
                                <form action="{{ route('admin.metrics.destroy', $metric) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-xs text-rose-300" onclick="return confirm('Hapus metric ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-3 py-3 text-center text-slate-500">
                                Belum ada data metric.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $metrics->links() }}
        </div>
    </div>
@endsection


