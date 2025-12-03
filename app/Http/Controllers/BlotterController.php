<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blotter;
use Illuminate\Support\Facades\Auth;

class BlotterController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        return view('blotter', compact('user')); 
    }

    public function store(Request $request)
    {
        // Validate inputs
        $request->validate([
            'reporter_name' => 'required|string|max:255',
            'reporter_address' => 'required|string|max:255',
            'reporter_contact' => 'required|string|size:11',
            'reporter_age' => 'required|integer',
            'respondent_name' => 'required|string|max:255',
            'respondent_address' => 'required|string|max:255',
            'respondent_contact' => 'required|string|size:11',
            'respondent_age' => 'required|integer',
            'complaint' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
        ]);

        // Save to DB
        Blotter::create([
            'reporter_name' => $request->reporter_name,
            'reporter_address' => $request->reporter_address,
            'reporter_contact' => $request->reporter_contact,
            'reporter_age' => $request->reporter_age,
            'respondent_name' => $request->respondent_name,
            'respondent_address' => $request->respondent_address,
            'respondent_contact' => $request->respondent_contact,
            'respondent_age' => $request->respondent_age,
            'complaint' => $request->complaint,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
        ]);

        return redirect()->back()->with('success', 'Blotter report submitted successfully!');
    }
}