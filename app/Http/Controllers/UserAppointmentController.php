<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class UserAppointmentController extends Controller
{
    public function create()
    {
        $user = Auth::user();

        // Get user's appointment history, ordered by most recent first
        $appointments = Appointment::where('user_id', $user->user_id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('appointment', compact('user', 'appointments'));
    }

    public function store(Request $request)
    {
        // Validate inputs
        $request->validate([
            'service' => 'required|string|max:255',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
            'symptoms' => 'nullable|string',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $request->validate([
            'service' => 'required|string|max:255',
            'date' => [
                'required',
                'date',
                'after:today',
                function ($attribute, $value, $fail) {
                    $dayOfWeek = date('w', strtotime($value));
                    if ($dayOfWeek == 0 || $dayOfWeek == 6) {
                        $fail('Appointments are not available on Saturdays and Sundays.');
                    }
                },
            ],
            'time' => 'required',
            'symptoms' => 'nullable|string',
        ]);

        // Convert 12-hour format (08:00 AM) to 24-hour format (08:00:00)
        $time24 = \Carbon\Carbon::createFromFormat('h:i A', $request->time)->format('H:i:s');

        // Save to DB
        Appointment::create([
            'user_id' => Auth::id(),
            'service' => $request->service,
            'symptoms' => $request->symptoms,
            'time' => $time24,  // Now in 24-hour format (e.g., "11:00:00" or "14:00:00")
            'date' => $request->date,
        ]);

        return redirect()->route('appointment.create')->with('success', 'Appointment scheduled successfully!');
    }

    public function destroy($id)
    {
        $appointment = Appointment::where('appointment_id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $appointment->delete();

        return redirect()->route('appointment.create')->with('success', 'Appointment cancelled successfully!');
    }
}
