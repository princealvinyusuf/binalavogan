<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\HomepageMetric;

class PublicController extends Controller
{
    public function home()
    {
        $latestBatch = Batch::where('is_featured', true)->latest()->first()
            ?? Batch::latest()->first();

        $quickStats = HomepageMetric::orderBy('order_column')->get();

        if (! $latestBatch) {
            $latestBatch = new Batch([
                'name' => 'Batch Nasional 2025',
                'period' => 'Januari - Juni 2025',
                'status' => 'Dibuka',
                'registration_url' => route('registration.index'),
            ]);
        }

        if ($quickStats->isEmpty()) {
            $quickStats = collect([
                ['label' => 'Alumni Program', 'value' => 12540],
                ['label' => 'Industri Mitra', 'value' => 830],
                ['label' => 'Provinsi Terlibat', 'value' => 38],
                ['label' => 'Job Placement Rate', 'value' => '72%'],
            ]);
        }

        $programConfig = config('program');

        return view('pages.home', [
            'latestBatch' => $latestBatch,
            'quickStats' => $quickStats,
            'news' => collect(),
            'stories' => collect(),
            'programContent' => $programConfig,
        ]);
    }

    public function about()
    {
        $contactInfo = [
            'call_center' => '1500-630',
            'email' => 'binalavogan@kemnaker.go.id',
            'address' => 'Jl. Jenderal Gatot Subroto Kav. 51, Jakarta Selatan, Indonesia',
            'office_hours' => 'Senin–Jumat, 08.00–16.00 WIB',
        ];

        return view('pages.about', compact('contactInfo'));
    }
}


