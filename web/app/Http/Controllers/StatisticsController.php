<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    /**
     * Public-facing dashboard with sample / aggregated data.
     */
    public function publicDashboard(Request $request)
    {
        // In real deployment, these values should come from DB or BI system
        $filters = [
            'batch' => $request->input('batch'),
            'province' => $request->input('province'),
            'sector' => $request->input('sector'),
            'period' => $request->input('period'),
        ];

        $summary = [
            'applicants' => 15230,
            'accepted' => 8400,
            'completion_rate' => 0.81,
            'placement_rate' => 0.72,
        ];

        $charts = [
            'applicants_vs_accepted' => [
                ['batch' => '2023-1', 'applicants' => 4000, 'accepted' => 2100],
                ['batch' => '2023-2', 'applicants' => 5200, 'accepted' => 3100],
                ['batch' => '2024-1', 'applicants' => 5030, 'accepted' => 3190],
            ],
            'participants_by_province' => [
                ['province' => 'DKI Jakarta', 'count' => 1200],
                ['province' => 'Jawa Barat', 'count' => 2300],
                ['province' => 'Jawa Timur', 'count' => 1900],
                ['province' => 'Sulawesi Selatan', 'count' => 800],
            ],
            'top_industries' => [
                ['sector' => 'Manufaktur', 'count' => 2600],
                ['sector' => 'Jasa Keuangan', 'count' => 1300],
                ['sector' => 'Teknologi Informasi', 'count' => 1100],
                ['sector' => 'Hospitality', 'count' => 900],
            ],
            'gender_inclusion' => [
                ['label' => 'Perempuan', 'value' => 0.46],
                ['label' => 'Laki-laki', 'value' => 0.52],
                ['label' => 'Lainnya / Tidak memilih', 'value' => 0.02],
            ],
        ];

        return view('pages.statistics', compact('filters', 'summary', 'charts'));
    }
}


