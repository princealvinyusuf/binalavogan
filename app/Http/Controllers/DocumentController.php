<?php

namespace App\Http\Controllers;

class DocumentController extends Controller
{
    public function index()
    {
        $categories = [
            'Pedoman' => [
                ['title' => 'Pedoman Program Pemagangan Nasional', 'slug' => 'pedoman-program-pemagangan', 'type' => 'PDF'],
            ],
            'SOP' => [
                ['title' => 'SOP Penyelenggaraan Pemagangan di Industri', 'slug' => 'sop-penyelenggaraan-di-industri', 'type' => 'PDF'],
            ],
            'Regulasi' => [
                ['title' => 'Permenaker tentang Pemagangan di Dalam Negeri', 'slug' => 'permenaker-pemagangan-dalam-negeri', 'type' => 'PDF'],
            ],
            'Template Kerja Sama' => [
                ['title' => 'Contoh MoU Kerja Sama Pemagangan', 'slug' => 'mou-kerja-sama-pemagangan', 'type' => 'DOCX'],
            ],
        ];

        return view('pages.documents.index', compact('categories'));
    }

    public function show(string $slug)
    {
        // Placeholder: in production, find document by slug and serve file download/preview
        $document = [
            'title' => 'Dokumen Pemagangan',
            'slug' => $slug,
            'description' => 'Deskripsi singkat dokumen pemagangan. File asli akan disajikan dari penyimpanan terproteksi.',
            'file_url' => '#',
        ];

        return view('pages.documents.show', compact('document'));
    }
}


