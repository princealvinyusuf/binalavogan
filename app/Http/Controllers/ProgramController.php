<?php

namespace App\Http\Controllers;

class ProgramController extends Controller
{
    public function index()
    {
        // Static placeholder content; can later be loaded from database or CMS
        $participantRequirements = [
            'Warga Negara Indonesia berusia 18–30 tahun (atau sesuai ketentuan)',
            'Lulusan minimal SMA/SMK/sederajat',
            'Sehat jasmani dan rohani',
            'Tidak sedang terikat kerja tetap di perusahaan lain',
        ];

        $companyRequirements = [
            'Memiliki legalitas usaha yang sah',
            'Memiliki instruktur dan program pemagangan yang terdokumentasi',
            'Bersedia memberikan laporan pelaksanaan dan output pemagangan',
            'Mematuhi regulasi dan standar keselamatan kerja yang berlaku',
        ];

        $faq = [
            [
                'question' => 'Apa itu Program Pemagangan Nasional?',
                'answer' => 'Program Pemagangan Nasional adalah program pemerintah yang memfasilitasi pembelajaran di dunia kerja melalui kerja praktik terstruktur di perusahaan mitra.',
            ],
            [
                'question' => 'Apakah peserta mendapatkan sertifikat?',
                'answer' => 'Peserta yang menyelesaikan program sesuai ketentuan berhak memperoleh sertifikat pemagangan dari perusahaan dan/atau lembaga terkait.',
            ],
            [
                'question' => 'Apakah pemagangan ini berbayar?',
                'answer' => 'Tidak ada biaya pendaftaran yang dipungut oleh pemerintah. Namun skema insentif dan fasilitas lain mengikuti kebijakan masing-masing perusahaan mitra.',
            ],
        ];

        $magangHubUrl = 'https://maganghub.kemnaker.go.id';

        return view('pages.program', compact(
            'participantRequirements',
            'companyRequirements',
            'faq',
            'magangHubUrl'
        ));
    }
}


