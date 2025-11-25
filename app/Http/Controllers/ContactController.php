<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contactInfo = [
            'call_center' => '1500-630',
            'email' => 'binalavogan@kemnaker.go.id',
            'address' => 'Jl. Jenderal Gatot Subroto Kav. 51, Jakarta Selatan, Indonesia',
            'office_hours' => 'Senin–Jumat, 08.00–16.00 WIB',
        ];

        return view('pages.contact', compact('contactInfo'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'topic' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // TODO: persist ticket to DB and send notification email

        return back()->with('status', __('messages.contact_received'));
    }
}


