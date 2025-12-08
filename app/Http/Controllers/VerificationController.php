<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class VerificationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Check if user already has a pending or approved verification
        $verification = Verification::where('user_id', $user->user_id)->first();
        
        return view('verify', compact('user', 'verification'));
    }

    public function store(Request $request)
{
    $request->validate([
        'id_type' => 'required|string|in:government_id,passport,drivers_license,voters_id',
        'id_image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
    ]);

    $user = Auth::user();

    $existingVerification = Verification::where('user_id', $user->user_id)->first();
    
    if ($existingVerification) {
        return redirect()->back()->with('error', 'You have already submitted a verification request.');
    }

    if ($request->hasFile('id_image')) {
        $image = $request->file('id_image');
        $imageName = time() . '_' . $user->user_id . '.' . $image->getClientOriginalExtension();
        
        // Store directly in public/verifications
        $image->move(public_path('verifications'), $imageName);

        Verification::create([
            'user_id' => $user->user_id,
            'image' => $imageName,
            'type' => $request->id_type,
            'submitted_at' => now(),
        ]);

        return redirect()->route('verify.index')->with('success', 'Verification submitted successfully!');
    }

    return redirect()->back()->with('error', 'Failed to upload image.');
}

public function delete()
{
    $verification = Auth::user()->verification;
    
    if ($verification && $verification->status == 'rejected') {
        $verification->delete();
        return redirect()->route('verify.index')->with('success', 'Previous verification deleted. You can now submit a new one.');
    }
    
    return redirect()->back()->with('error', 'Unable to delete verification.');
}
}