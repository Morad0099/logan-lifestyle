<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(BookingRequest $request)
    {
        Event::create($request->all());

        return redirect()->route('arts')->with('success', 'Event created successfully!');
    }

    public function dance(BookingRequest $request)
    {
        Event::create($request->all());

        return redirect()->route('dance')->with('success', 'Event created successfully!');
    }

    public function wedding(BookingRequest $request)
    {
        Event::create($request->all());

        return redirect()->route('wedding')->with('success', 'Event created successfully!');
    }

    public function meditation(BookingRequest $request)
    {
        Event::create($request->all());

        return redirect()->route('meditation')->with('success', 'Event created successfully!');
    }
}
