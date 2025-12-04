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

        // Get user's blotter history, ordered by most recent first
        $blotters = Blotter::where('user_id', $user->user_id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('blotter', compact('user', 'blotters'));
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
            'respondent_contact' => 'nullable|string|size:11',
            'respondent_age' => 'nullable|integer',
            'complaint' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'user_id' => 'required|exists:user,user_id',
        ]);

        // Save to DB
        Blotter::create([
            'user_id' => Auth::id(), // Add user_id
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
            'status' => 'pending',
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('blotter.create')->with('success', 'Blotter report submitted successfully!');
    }

    public function destroy($id)
    {
        $blotter = Blotter::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $blotter->delete();

        return redirect()->route('blotter.create')->with('success', 'Blotter report deleted successfully!');
    }
}
