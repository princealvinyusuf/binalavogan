<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        // Placeholder data for hero, banner, and quick stats
        $latestBatch = [
            'name' => 'Batch Nasional 2025',
            'period' => 'Januari - Juni 2025',
            'status' => 'Dibuka',
            'registration_url' => route('registration.index'),
        ];

        $quickStats = [
            ['label' => 'Alumni Program', 'value' => 12540],
            ['label' => 'Industri Mitra', 'value' => 830],
            ['label' => 'Provinsi Terlibat', 'value' => 38],
            ['label' => 'Job Placement Rate', 'value' => '72%'],
        ];

        $news = [];
        $stories = [];

        return view('pages.home', compact('latestBatch', 'quickStats', 'news', 'stories'));
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


