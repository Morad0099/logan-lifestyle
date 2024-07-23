<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(): View
    {
        return view('modules.index.index');
    }

    public function wedding(): View
    {
        return view('modules.wedding.index');
    }

    public function arts(): View
    {
        return view('modules.arts.index');
    }

    public function dance(): View
    {
        return view('modules.dance.index');
    }

    public function meditation(): View
    {
        return view('modules.meditation.index');
    }

    public function aboutUs(): View
    {
        return view('modules.about_us.index');
    }
}
