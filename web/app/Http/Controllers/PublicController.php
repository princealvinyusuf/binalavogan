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
        return view('pages.about');
    }
}


