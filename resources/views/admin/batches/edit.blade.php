@extends('layouts.admin')

@section('title', 'Admin | Edit Batch')
@section('header', 'Edit Batch')

@section('content')
    <div class="rounded-2xl bg-slate-900 border border-slate-800 p-5">
        <form method="POST" action="{{ route('admin.batches.update', $batch) }}" class="space-y-4">
            @csrf
            @method('PUT')
            @include('admin.batches.form')
        </form>
    </div>
@endsection


