<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        $query = Appointment::with('user');

        // Search by user name
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->whereHas('user', function ($q) use ($search) {
                $q->where('firstname', 'LIKE', "%{$search}%")
                    ->orWhere('lastname', 'LIKE', "%{$search}%")
                    ->orWhere('middlename', 'LIKE', "%{$search}%");
            });
        }

        $appointments = $query->orderBy('date', 'desc')->orderBy('time', 'desc')->paginate(10);

        return view('admin.appointment', compact('appointments'));
    }

    public function store(Request $request)
    {
        // Validate inputs
        $request->validate([
            'service' => 'required|string|max:255',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
            'symptoms' => 'required|string',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Convert 12-hour format to 24-hour format
        $time24 = \Carbon\Carbon::createFromFormat('h:i A', $request->time)->format('H:i:s');

        // Save to DB
        Appointment::create([
            'user_id' => Auth::id(), 
            'service' => $request->service,
            'symptoms' => $request->symptoms,
            'time' => $time24,  // Use converted time
            'date' => $request->date,
        ]);

        return redirect()->route('admin.appointment.index')->with('success', 'Appointment scheduled successfully!');
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('admin.appointment.index')->with('success', 'Appointment deleted successfully.');
    }

    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);

        $request->validate([
            'service' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'symptoms' => 'nullable|string|max:255',
        ]);

        // Convert 12-hour format to 24-hour format if time is in AM/PM format
        $time = $request->time;
        if (strpos($time, 'AM') !== false || strpos($time, 'PM') !== false) {
            $time = \Carbon\Carbon::createFromFormat('h:i A', $request->time)->format('H:i:s');
        }

        $appointment->update([
            'service' => $request->service,
            'date' => $request->date,
            'time' => $time,
            'symptoms' => $request->symptoms,
        ]);

        return redirect()->route('admin.appointment.index')->with('success', 'Appointment updated successfully.');
    }
}