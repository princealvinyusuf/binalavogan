<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Industry;

class IndustryController extends Controller
{
    public function index()
    {
        $industries = Industry::latest()->paginate(10);

        return view('admin.industries.index', compact('industries'));
    }
}


