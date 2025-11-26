@extends('layouts.admin')

@section('title', 'Admin | Batch')
@section('header', 'Batch Program Pemagangan')

@section('content')
    <div class="rounded-2xl bg-slate-900 border border-slate-800 p-4">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-sm font-semibold text-white">Daftar Batch</h2>
            <a href="{{ route('admin.batches.create') }}" class="inline-flex items-center rounded-full bg-cyan-500 text-xs font-semibold px-4 py-2 text-slate-900">
                Tambah Batch
            </a>
        </div>
        <div class="overflow-x-auto rounded-xl border border-slate-800">
            <table class="min-w-full text-xs">
                <thead class="bg-slate-800 text-slate-300">
                    <tr>
                        <th class="px-3 py-2 text-left font-semibold">Nama Batch</th>
                        <th class="px-3 py-2 text-left font-semibold">Periode</th>
                        <th class="px-3 py-2 text-left font-semibold">Status</th>
                        <th class="px-3 py-2 text-left font-semibold">Featured</th>
                        <th class="px-3 py-2 text-right font-semibold"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800">
                    @forelse($batches as $batch)
                        <tr>
                            <td class="px-3 py-2 text-white">{{ $batch->name }}</td>
                            <td class="px-3 py-2 text-slate-300">{{ $batch->period }}</td>
                            <td class="px-3 py-2 text-slate-300">{{ $batch->status }}</td>
                            <td class="px-3 py-2 text-slate-300">
                                @if($batch->is_featured)
                                    <span class="text-emerald-400 text-xs font-semibold">Featured</span>
                                @else
                                    <span class="text-slate-500 text-xs">-</span>
                                @endif
                            </td>
                            <td class="px-3 py-2 text-right text-slate-300">
                                <a href="{{ route('admin.batches.edit', $batch) }}" class="text-cyan-300 text-xs mr-3">Edit</a>
                                <form action="{{ route('admin.batches.destroy', $batch) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-xs text-rose-300" onclick="return confirm('Hapus batch ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-3 py-3 text-center text-slate-500">
                                Belum ada data batch.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $batches->links() }}
        </div>
    </div>
@endsection


