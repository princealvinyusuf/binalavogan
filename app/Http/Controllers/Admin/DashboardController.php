<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use App\Models\StatisticsSnapshot;

class DashboardController extends Controller
{
    public function index()
    {
        $kpis = [
            ['label' => 'Total Pendaftar Industri', 'value' => Industry::count()],
            ['label' => 'Batch Statistik', 'value' => StatisticsSnapshot::distinct('batch')->count()],
            ['label' => 'Snapshot Terkini', 'value' => optional(StatisticsSnapshot::latest('period_start')->first())->batch ?? '-'],
            ['label' => 'Update Terakhir', 'value' => optional(StatisticsSnapshot::latest('updated_at')->first())->updated_at?->diffForHumans() ?? 'Belum ada'],
        ];

        $latestIndustries = Industry::latest()->take(5)->get();
        $latestSnapshots = StatisticsSnapshot::latest('period_start')->take(5)->get();

        return view('admin.dashboard', compact('kpis', 'latestIndustries', 'latestSnapshots'));
    }
}


