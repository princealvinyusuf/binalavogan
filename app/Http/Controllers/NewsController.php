<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function index()
    {
        $news = [
            [
                'title' => 'Kemnaker Luncurkan Batch Baru Program Pemagangan Nasional 2025',
                'slug' => 'peluncuran-batch-baru-2025',
                'date' => '2024-11-01',
                'category' => 'Press Release',
            ],
            [
                'title' => 'Kolaborasi BINALAVOGAN dengan Industri Teknologi untuk Skema Pemagangan Digital',
                'slug' => 'kolaborasi-industri-teknologi',
                'date' => '2024-10-10',
                'category' => 'Berita',
            ],
        ];

        return view('pages.news.index', compact('news'));
    }

    public function show(string $slug)
    {
        $article = [
            'title' => 'Siaran Pers Program Pemagangan Nasional',
            'slug' => $slug,
            'date' => now()->toDateString(),
            'category' => 'Press Release',
            'content' => 'Ini adalah contoh siaran pers. Konten lengkap akan dikelola melalui modul berita atau CMS internal.',
        ];

        return view('pages.news.show', compact('article'));
    }
}


