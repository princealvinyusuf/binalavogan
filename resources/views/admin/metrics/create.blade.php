@extends('layouts.admin')

@section('title', 'Admin | Tambah Metric')
@section('header', 'Tambah Statistik Ringkas')

@section('content')
    <div class="rounded-2xl bg-slate-900 border border-slate-800 p-5">
        <form method="POST" action="{{ route('admin.metrics.store') }}" class="space-y-4">
            @include('admin.metrics.form')
        </form>
    </div>
@endsection


