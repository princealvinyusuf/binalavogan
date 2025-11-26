<div id="program-sections" class="grid gap-8 lg:grid-cols-[minmax(0,2fr)_minmax(0,1fr)]">
    <section class="space-y-8">
        <div id="gambaran-umum" class="rounded-3xl bg-white border border-slate-100 shadow-sm p-6 space-y-3">
            <div class="flex items-center justify-between gap-4">
                <h2 class="text-base font-semibold text-slate-900">Gambaran Umum Program</h2>
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-[0.2em]">Overview</span>
            </div>
            <p class="text-sm text-slate-600">
                Program Pemagangan Nasional dirancang sebagai jembatan antara pendidikan formal/non-formal dan kebutuhan nyata
                industri. Peserta mendapatkan pengalaman kerja langsung, bimbingan mentor, dan sertifikasi yang diakui. Industri
                memperoleh akses talenta terpilih dengan kurikulum yang dapat disesuaikan.
            </p>
            <div class="grid gap-3 sm:grid-cols-3 text-xs text-slate-600">
                <div class="rounded-2xl border border-slate-100 bg-slate-50/80 px-3 py-3">
                    Skema berbasis batch nasional &amp; provinsi.
                </div>
                <div class="rounded-2xl border border-slate-100 bg-slate-50/80 px-3 py-3">
                    Kolaborasi tripartit: pemerintah, industri, lembaga pelatihan.
                </div>
                <div class="rounded-2xl border border-slate-100 bg-slate-50/80 px-3 py-3">
                    Integrasi data dengan ekosistem MagangHub Kemnaker.
                </div>
            </div>
        </div>

        <div id="manfaat" class="rounded-3xl bg-white border border-slate-100 shadow-sm p-6 space-y-4">
            <div class="flex items-center justify-between gap-4">
                <h2 class="text-base font-semibold text-slate-900">Manfaat Program</h2>
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-[0.2em]">Impact</span>
            </div>
            <div class="grid gap-4 sm:grid-cols-3 text-sm text-slate-700">
                <div class="rounded-3xl border border-slate-100 bg-gradient-to-br from-sky-50 to-white p-4">
                    <p class="text-xs font-semibold text-sky-700 uppercase tracking-[0.18em] mb-2">Peserta</p>
                    <ul class="space-y-1 list-disc list-inside">
                        <li>Pengalaman kerja nyata &amp; mentoring.</li>
                        <li>Peningkatan kompetensi teknis &amp; soft skills.</li>
                        <li>Peluang penempatan kerja pasca program.</li>
                    </ul>
                </div>
                <div class="rounded-3xl border border-slate-100 bg-gradient-to-br from-cyan-50 to-white p-4">
                    <p class="text-xs font-semibold text-cyan-700 uppercase tracking-[0.18em] mb-2">Industri</p>
                    <ul class="space-y-1 list-disc list-inside">
                        <li>Talenta siap dikembangkan sesuai kebutuhan.</li>
                        <li>Fleksibilitas kurikulum &amp; standar kompetensi.</li>
                        <li>Penguatan reputasi dan jejaring pemerintah.</li>
                    </ul>
                </div>
                <div class="rounded-3xl border border-slate-100 bg-gradient-to-br from-emerald-50 to-white p-4">
                    <p class="text-xs font-semibold text-emerald-700 uppercase tracking-[0.18em] mb-2">Pemerintah</p>
                    <ul class="space-y-1 list-disc list-inside">
                        <li>Data transisi sekolah-ke-kerja yang terukur.</li>
                        <li>Dasar kebijakan berbasis bukti (evidence-based).</li>
                        <li>Kontribusi pada penurunan pengangguran terbuka.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="grid gap-6 lg:grid-cols-2">
            <div id="persyaratan-peserta" class="rounded-3xl bg-white border border-slate-100 shadow-sm p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-semibold text-slate-900">Persyaratan Peserta</h2>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-[0.2em]">Eligibility</span>
                </div>
                <ul class="mt-4 space-y-2 text-sm text-slate-700">
                    @foreach($participantRequirements as $item)
                        <li class="flex items-start gap-2">
                            <span class="mt-2 h-1.5 w-1.5 rounded-full bg-sky-500"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div id="persyaratan-perusahaan" class="rounded-3xl bg-white border border-slate-100 shadow-sm p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-semibold text-slate-900">Persyaratan Industri / Lembaga</h2>
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-[0.2em]">Hosting</span>
                </div>
                <ul class="mt-4 space-y-2 text-sm text-slate-700">
                    @foreach($companyRequirements as $item)
                        <li class="flex items-start gap-2">
                            <span class="mt-2 h-1.5 w-1.5 rounded-full bg-cyan-500"></span>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div id="faq" class="rounded-3xl bg-white border border-slate-100 shadow-sm p-6">
            <div class="flex items-center justify-between">
                <h2 class="text-base font-semibold text-slate-900">Pertanyaan yang Sering Diajukan</h2>
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-[0.2em]">FAQ</span>
            </div>
            <div class="mt-5 space-y-4">
                @foreach($faq as $item)
                    <details class="rounded-2xl border border-slate-200/80 bg-slate-50 px-4 py-3 text-sm group open:bg-white open:shadow-sm">
                        <summary class="font-semibold text-slate-900 cursor-pointer flex items-center justify-between gap-3">
                            {{ $item['question'] }}
                            <span class="text-xs text-slate-400 group-open:rotate-45 transition-transform">+</span>
                        </summary>
                        <p class="mt-2 text-slate-700">
                            {{ $item['answer'] }}
                        </p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    <aside class="space-y-5" aria-label="Navigasi dan integrasi">
        <div class="rounded-3xl bg-white border border-slate-100 shadow-sm p-6 text-sm">
            <p class="text-xs font-semibold text-slate-400 uppercase tracking-[0.3em]">Navigasi Cepat</p>
            <ul class="mt-4 space-y-2 font-semibold text-slate-700">
                <li><a href="#gambaran-umum" class="hover:text-sky-700">Gambaran Umum</a></li>
                <li><a href="#manfaat" class="hover:text-sky-700">Manfaat Program</a></li>
                <li><a href="#persyaratan-peserta" class="hover:text-sky-700">Peserta</a></li>
                <li><a href="#persyaratan-perusahaan" class="hover:text-sky-700">Industri / Lembaga</a></li>
                <li><a href="#faq" class="hover:text-sky-700">FAQ</a></li>
            </ul>
        </div>

        <div class="rounded-3xl bg-gradient-to-br from-sky-900 to-cyan-700 text-white p-6 shadow-lg">
            <p class="text-xs font-semibold tracking-[0.3em] text-cyan-200 uppercase">Integrasi MagangHub</p>
            <p class="mt-3 text-sm text-slate-100">
                Pendaftaran peserta dan manajemen lowongan pemagangan dilayani melalui platform resmi MagangHub Kemnaker.
            </p>
            <a href="{{ $magangHubUrl }}" target="_blank" rel="noopener"
               class="mt-4 inline-flex items-center rounded-full bg-white/10 px-4 py-2 text-xs font-semibold text-white border border-white/40 hover:bg-white/20">
                Masuk ke MagangHub
                <span class="ml-2" aria-hidden="true">↗</span>
            </a>
            <p class="mt-2 text-[11px] text-cyan-100/80">
                Tautan akan membuka jendela baru ke portal MagangHub.
            </p>
        </div>
    </aside>
</div>


