<?php

namespace App\Http\Controllers;

class ProgramController extends Controller
{
    public function index()
    {
        $programConfig = config('program');

        return view('pages.program', [
            'participantRequirements' => $programConfig['participant_requirements'],
            'companyRequirements' => $programConfig['company_requirements'],
            'faq' => $programConfig['faq'],
            'magangHubUrl' => $programConfig['maganghub_url'],
        ]);
    }
}


