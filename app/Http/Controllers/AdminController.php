<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Log the user out

        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return redirect()->route('admin.login'); // Redirect to the login page
    }

    public function getChart()
    {
        // Get the count of bookings for each month
        $events = Event::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Initialize an array with counts set to 0 for each month
        $monthlyCounts = array_fill(1, 12, 0);

        // Fill the monthly counts with actual data
        foreach ($events as $data) {
            $monthlyCounts[$data->month] = $data->count;
        }

        return response()->json($monthlyCounts);
    }

    public function addStaff(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 400);
        }

        $defaultPassword = Hash::make('12345678');

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $defaultPassword,
        ]);

        return response()->json([
            'message' => 'User created successfully',
            'user' => $user,
        ]);
    }


    public function updateStaff(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 400);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'message' => 'User not found',
            ], 404);
        }

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return response()->json([
            'message' => 'User updated successfully',
            'user' => $user,
        ]);
    }

    public function deleteStaff(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 400);
        }

        $user = User::where('id', $request->id)->first();

        if (!$user) {
            return response()->json([
                'message' => 'User not found',
            ], 404);
        }

        $user->delete();

        return response()->json([
            'message' => 'User deleted successfully',
        ]);
    }

    public function updatePassword(Request $request)
    {
        // Validate the form data
        $request->validate([
            'new_password' => 'required|string|min:8|confirmed',
            'id' => 'required|string'
        ]);

        $user = User::where('id', $request->id)->first();

        if (!$user) {
            return response()->json([
                'message' => 'User not found',
            ], 404);
        }

        $hashedPassword = Hash::make($request->new_password);

        $user->password = $hashedPassword;
        $user->save();

        return response()->json([
            'message' => 'Password updated successfully',
        ]);
    }

    public function updateEvent($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json([
                'ok' => false,
                'message' => 'Event not found',
            ], 404);
        }

        $event->update(['status' => 1]);

        return response()->json([
            'ok' => true,
            'message' => 'Event updated successfully',
        ]);
    }
}
