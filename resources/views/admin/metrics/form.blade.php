@csrf
<div class="space-y-4 text-sm">
    <div>
        <label class="block text-xs uppercase tracking-[0.2em] text-slate-400">Label</label>
        <input type="text" name="label" value="{{ old('label', $metric->label ?? '') }}"
               class="mt-1 block w-full rounded-2xl border border-slate-700 bg-slate-900 text-white px-3 py-2 focus:border-cyan-400 focus:ring-cyan-400" required>
        @error('label') <p class="text-xs text-rose-400">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="block text-xs uppercase tracking-[0.2em] text-slate-400">Nilai</label>
        <input type="text" name="value" value="{{ old('value', $metric->value ?? '') }}"
               class="mt-1 block w-full rounded-2xl border border-slate-700 bg-slate-900 text-white px-3 py-2 focus:border-cyan-400 focus:ring-cyan-400" required>
        @error('value') <p class="text-xs text-rose-400">{{ $message }}</p> @enderror
    </div>
    <div>
        <label class="block text-xs uppercase tracking-[0.2em] text-slate-400">Urutan</label>
        <input type="number" name="order_column" value="{{ old('order_column', $metric->order_column ?? 0) }}"
               class="mt-1 block w-full rounded-2xl border border-slate-700 bg-slate-900 text-white px-3 py-2 focus:border-cyan-400 focus:ring-cyan-400">
        @error('order_column') <p class="text-xs text-rose-400">{{ $message }}</p> @enderror
    </div>
</div>
<div class="mt-6">
    <button type="submit" class="inline-flex items-center rounded-full bg-cyan-500 px-5 py-2 text-xs font-semibold text-slate-900">
        Simpan
    </button>
</div>


