<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
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

    public function login(): View
    {
        return view('modules.login.index');
    }

    public function dashboard(): View
    {
        $bookings = Event::count();
        $pending = Event::where('status',0)->count();
        $attended = Event::where('status',1)->count();
        $staff = User::count();
        return view('modules.dashboard.index', compact('bookings','pending','attended','staff'));
    }

    public function bookings(): View
    {
        $bookings = Event::orderBy('id', 'desc')->get();
        return view('modules.bookings.index', compact('bookings'));
    }

    public function staff(): View
    {
        $staff = User::get();
        return view('modules.admin-staff.index', compact('staff'));
    }

    public function password()
    {
        return view('modules.password.index');
    }
}
