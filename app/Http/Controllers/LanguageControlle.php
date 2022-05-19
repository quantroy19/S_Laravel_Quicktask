<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageControlle extends Controller
{
    public function changeLanguage(Request $request, $language)
    {
        $request->session()->put('lang', $language);
        return redirect()->back();
    }
}
