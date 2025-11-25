<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        // Placeholder roadmap and calendar events
        $roadmapSteps = [
            ['step' => 1, 'title' => 'Pendaftaran', 'description' => 'Peserta dan industri mendaftar melalui MagangHub dan formulir minat industri.'],
            ['step' => 2, 'title' => 'Seleksi Administrasi', 'description' => 'Verifikasi dokumen dan kelayakan calon peserta serta industri.'],
            ['step' => 3, 'title' => 'Penempatan', 'description' => 'Pencocokan peserta dengan posisi pemagangan di industri mitra.'],
            ['step' => 4, 'title' => 'Pelaksanaan & Evaluasi', 'description' => 'Pelaksanaan program pemagangan dan evaluasi hasil belajar.'],
        ];

        $events = [
            [
                'date' => '2025-01-15',
                'title' => 'Pembukaan Pendaftaran Batch 1 2025',
                'location' => 'Nasional (online)',
            ],
            [
                'date' => '2025-02-01',
                'title' => 'Webinar Sosialisasi Program Pemagangan Nasional',
                'location' => 'Online',
            ],
        ];

        $magangHubUrl = 'https://maganghub.kemnaker.go.id';

        return view('pages.registration', compact('roadmapSteps', 'events', 'magangHubUrl'));
    }

    public function storeIndustry(Request $request)
    {
        // For now, validate and save to industries table as basic record
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'pic_name' => 'required|string|max:255',
            'pic_email' => 'required|email|max:255',
            'slots' => 'required|integer|min:1',
            'notes' => 'nullable|string|max:2000',
        ]);

        \App\Models\Industry::create($validated);

        return back()->with('status', __('messages.industry_interest_received'));
    }
}


