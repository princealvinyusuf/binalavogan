@extends('layouts.admin')

@section('title', 'Admin | Edit Metric')
@section('header', 'Edit Statistik Ringkas')

@section('content')
    <div class="rounded-2xl bg-slate-900 border border-slate-800 p-5">
        <form method="POST" action="{{ route('admin.metrics.update', $metric) }}" class="space-y-4">
            @csrf
            @method('PUT')
            @include('admin.metrics.form')
        </form>
    </div>
@endsection


