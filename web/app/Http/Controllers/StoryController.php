<?php

namespace App\Http\Controllers;

class StoryController extends Controller
{
    public function index()
    {
        $stories = [
            [
                'title' => 'Dari Peserta Pemagangan Menjadi Engineer Tetap',
                'slug' => 'dari-peserta-menjadi-engineer-tetap',
                'excerpt' => 'Melalui Program Pemagangan Nasional, Rina berhasil mengembangkan kompetensi dan direkrut sebagai karyawan tetap di industri otomotif.',
                'industry' => 'Industri Otomotif',
                'year' => 2024,
            ],
        ];

        return view('pages.stories.index', compact('stories'));
    }

    public function show(string $slug)
    {
        // For now, just show a generic story template
        $story = [
            'title' => 'Cerita Sukses Peserta Program Pemagangan Nasional',
            'slug' => $slug,
            'content' => 'Ini adalah contoh cerita sukses. Konten lengkap akan diambil dari basis data atau CMS pada tahap implementasi berikutnya.',
            'industry' => 'Industri Manufaktur',
            'year' => 2024,
        ];

        return view('pages.stories.show', compact('story'));
    }
}


