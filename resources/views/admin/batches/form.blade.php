@csrf
<div class="space-y-4 text-sm">
    <div>
        <label class="block text-xs uppercase tracking-[0.2em] text-slate-400">Nama Batch</label>
        <input type="text" name="name" value="{{ old('name', $batch->name ?? '') }}"
               class="mt-1 block w-full rounded-2xl border border-slate-700 bg-slate-900 text-white px-3 py-2 focus:border-cyan-400 focus:ring-cyan-400" required>
        @error('name') <p class="text-xs text-rose-400">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="block text-xs uppercase tracking-[0.2em] text-slate-400">Periode</label>
        <input type="text" name="period" value="{{ old('period', $batch->period ?? '') }}"
               class="mt-1 block w-full rounded-2xl border border-slate-700 bg-slate-900 text-white px-3 py-2 focus:border-cyan-400 focus:ring-cyan-400">
        @error('period') <p class="text-xs text-rose-400">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="block text-xs uppercase tracking-[0.2em] text-slate-400">Status</label>
        <input type="text" name="status" value="{{ old('status', $batch->status ?? '') }}"
               class="mt-1 block w-full rounded-2xl border border-slate-700 bg-slate-900 text-white px-3 py-2 focus:border-cyan-400 focus:ring-cyan-400">
        @error('status') <p class="text-xs text-rose-400">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="block text-xs uppercase tracking-[0.2em] text-slate-400">URL Pendaftaran</label>
        <input type="url" name="registration_url" value="{{ old('registration_url', $batch->registration_url ?? '') }}"
               class="mt-1 block w-full rounded-2xl border border-slate-700 bg-slate-900 text-white px-3 py-2 focus:border-cyan-400 focus:ring-cyan-400">
        @error('registration_url') <p class="text-xs text-rose-400">{{ $message }}</p> @enderror
    </div>
    <div class="flex items-center gap-2">
        <input type="checkbox" name="is_featured" value="1" id="is_featured"
               class="rounded border-slate-700 bg-slate-900 text-cyan-400 focus:ring-cyan-400"
               @checked(old('is_featured', $batch->is_featured ?? false))>
        <label for="is_featured" class="text-xs text-slate-300">Jadikan batch ini sebagai featured di beranda</label>
    </div>
</div>
<div class="mt-6">
    <button type="submit" class="inline-flex items-center rounded-full bg-cyan-500 px-5 py-2 text-xs font-semibold text-slate-900">
        Simpan
    </button>
</div>


