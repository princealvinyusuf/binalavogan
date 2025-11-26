@extends('layouts.admin')

@section('title', 'Admin | Industri')
@section('header', 'Penyelenggara Pemagangan')

@section('content')
    <div class="rounded-2xl bg-slate-900 border border-slate-800 p-4">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-sm font-semibold text-white">Daftar Industri / BLK / LPK</h2>
            <span class="text-xs text-slate-400">Total: {{ $industries->total() }}</span>
        </div>
        <div class="overflow-x-auto rounded-xl border border-slate-800">
            <table class="min-w-full text-xs">
                <thead class="bg-slate-800 text-slate-300">
                    <tr>
                        <th class="px-3 py-2 text-left font-semibold">Perusahaan</th>
                        <th class="px-3 py-2 text-left font-semibold">Sektor</th>
                        <th class="px-3 py-2 text-left font-semibold">Provinsi</th>
                        <th class="px-3 py-2 text-left font-semibold">PIC</th>
                        <th class="px-3 py-2 text-right font-semibold">Kuota</th>
                        <th class="px-3 py-2 text-left font-semibold">Diajukan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800">
                    @forelse($industries as $industry)
                        <tr>
                            <td class="px-3 py-2 text-white">{{ $industry->company_name }}</td>
                            <td class="px-3 py-2 text-slate-300">{{ $industry->sector }}</td>
                            <td class="px-3 py-2 text-slate-300">{{ $industry->province }}</td>
                            <td class="px-3 py-2 text-slate-300">
                                {{ $industry->pic_name }}<br>
                                <span class="text-slate-500">{{ $industry->pic_email }}</span>
                            </td>
                            <td class="px-3 py-2 text-right text-slate-300">{{ $industry->slots ?? '-' }}</td>
                            <td class="px-3 py-2 text-slate-300">{{ $industry->created_at?->format('d M Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-3 py-3 text-center text-slate-500">
                                Belum ada data pendaftaran industri.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $industries->links() }}
        </div>
    </div>
@endsection


