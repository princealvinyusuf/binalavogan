<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function switch(string $locale): RedirectResponse
    {
        App::setLocale($locale);
        Session::put('locale', $locale);

        return back();
    }
}


