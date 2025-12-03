<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'birthdate' => 'required|date',
            'gender' => 'required|string|max:45',
            'contact' => 'required|digits:11|unique:user,contact',
            'email' => 'required|string|email|max:255|unique:user,email',
            'password' => 'required|string|min:8|confirmed',
            'terms' => 'accepted',
        ]);

        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'middlename' => $request->middlename,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'contact' => $request->contact,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 0, // Default role: Resident
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully! Please login.');
    }

    public function create()
    {
        return view('signup'); 
    }
}
