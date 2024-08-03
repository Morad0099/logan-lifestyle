<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang(Request $request)
    {
        $lang = $request->lang;
        if (array_key_exists($lang, config('app.supported_languages'))) {
            Session::put('applocale', $lang);
        }
        return redirect()->back();
    }
}
