<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'birthdate' => 'required|date',
            'gender' => 'required|string|max:45',
            'place_of_birth' => 'nullable|string|max:255',
            'citizenship' => 'nullable|string|max:45',
            'civil_status' => 'nullable|string|max:45',
            'occupation' => 'nullable|string|max:255',
            'house_number' => 'nullable|integer',
            'street' => 'nullable|string|max:255',
            'email' => 'required|email|unique:user,email,' . $user->user_id . ',user_id',
            'contact' => 'required|digits:11|unique:user,contact,' . $user->user_id . ',user_id',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->middlename = $request->middlename;
        $user->birthdate = $request->birthdate;
        $user->gender = $request->gender;
        $user->place_of_birth = $request->place_of_birth;
        $user->citizenship = $request->citizenship;
        $user->civil_status = $request->civil_status;
        $user->occupation = $request->occupation;
        $user->house_number = $request->house_number;
        $user->street = $request->street;
        $user->email = $request->email;
        $user->contact = $request->contact;

        // Only update password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('settings')->with('success', 'Profile updated successfully!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        // Check if current password is correct
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.'])->withInput();
        }

        // Update password
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('settings')->with('success', 'Password updated successfully!');
    }
}
