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
}
