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
            'id_image' => 'required|image|mimes:jpeg,jpg,png|max:2048', // 2MB max
        ]);

        $user = Auth::user();

        // Check if user already submitted verification
        $existingVerification = Verification::where('user_id', $user->user_id)->first();
        
        if ($existingVerification) {
            return redirect()->back()->with('error', 'You have already submitted a verification request.');
        }

        // Handle file upload
        if ($request->hasFile('id_image')) {
            $image = $request->file('id_image');
            $imageName = time() . '_' . $user->user_id . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/verifications', $imageName);

            // Save to database
            Verification::create([
                'user_id' => $user->user_id,
                'image' => $imageName,
                'type' => $request->id_type,
                'submitted_at' => now(),
            ]);

            return redirect()->route('verify.index')->with('success', 'Verification submitted successfully! Please wait for admin approval.');
        }

        return redirect()->back()->with('error', 'Failed to upload image. Please try again.');
    }
}