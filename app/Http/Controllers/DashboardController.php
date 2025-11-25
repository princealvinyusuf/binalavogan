<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Internal dashboard placeholder; data should later come from DB/BI
        $kpis = [
            ['label' => 'Total Peserta Aktif', 'value' => 4200],
            ['label' => 'Program Selesai (Batch)', 'value' => 12],
            ['label' => 'Job Placement Rate Nasional', 'value' => '72%'],
            ['label' => 'Industri Mitra Aktif', 'value' => 830],
        ];

        $tableRows = [
            [
                'province' => 'Jawa Barat',
                'batch' => '2024-1',
                'participants' => 950,
                'completed' => 820,
                'placed' => 650,
                'placement_rate' => '79%',
            ],
            [
                'province' => 'Jawa Timur',
                'batch' => '2024-1',
                'participants' => 780,
                'completed' => 690,
                'placed' => 520,
                'placement_rate' => '75%',
            ],
        ];

        return view('dashboard.internal', compact('kpis', 'tableRows'));
    }
}


