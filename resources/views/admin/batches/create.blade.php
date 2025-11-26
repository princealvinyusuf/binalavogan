@extends('layouts.admin')

@section('title', 'Admin | Tambah Batch')
@section('header', 'Tambah Batch Baru')

@section('content')
    <div class="rounded-2xl bg-slate-900 border border-slate-800 p-5">
        <form method="POST" action="{{ route('admin.batches.store') }}" class="space-y-4">
            @include('admin.batches.form')
        </form>
    </div>
@endsection


