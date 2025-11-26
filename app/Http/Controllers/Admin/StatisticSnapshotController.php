<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StatisticsSnapshot;

class StatisticSnapshotController extends Controller
{
    public function index()
    {
        $snapshots = StatisticsSnapshot::latest('period_start')->paginate(10);

        return view('admin.statistics.index', compact('snapshots'));
    }
}


