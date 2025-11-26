@extends('layouts.public')

@section('title', 'Program Pemagangan Nasional | BINALAVOGAN')
@section('meta_description', 'Informasi lengkap tentang Program Pemagangan Nasional: tujuan, manfaat, persyaratan peserta dan perusahaan, serta integrasi dengan MagangHub.')

@section('page_header')
    <div class="space-y-3">
        <p class="text-[11px] font-semibold tracking-[0.25em] uppercase text-cyan-700">
            Program Pemagangan Nasional
        </p>
        <h1 class="text-2xl sm:text-3xl font-semibold text-slate-900 max-w-4xl">
            Skema pemagangan terstruktur untuk memperkuat kompetensi kerja berbasis industri.
        </h1>
        <p class="text-sm text-slate-700 max-w-3xl">
            Program ini menjembatani lulusan dan pencari kerja dengan dunia usaha/industri melalui pembelajaran di tempat kerja,
            kurikulum yang terstandar, serta monitoring bersama antara pemerintah dan mitra industri.
        </p>
    </div>
@endsection

@section('content')
    @include('pages.partials.program-sections', [
        'participantRequirements' => $participantRequirements,
        'companyRequirements' => $companyRequirements,
        'faq' => $faq,
        'magangHubUrl' => $magangHubUrl,
    ])
@endsection


