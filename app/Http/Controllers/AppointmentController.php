<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

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
        $request->validate([
            'user_id' => 'required|exists:user,user_id',
            'service' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'symptoms' => 'nullable|string|max:255',
        ]);

        Appointment::create([
            'user_id' => $request->user_id,
            'service' => $request->service,
            'symptoms' => $request->symptoms,
            'date' => $request->date,
            'time' => $request->time,
        ]);

        return redirect()->route('appointment.index')->with('success', 'Appointment created successfully.');
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('appointment.index')->with('success', 'Appointment deleted successfully.');
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

        $appointment->update([
            'service' => $request->service,
            'date' => $request->date,
            'time' => $request->time,
            'symptoms' => $request->symptoms,
        ]);

        return redirect()->route('appointment.index')->with('success', 'Appointment updated successfully.');
    }
}
