<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Show Users
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function store(Request $request)
    {
        // validate input
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'birthdate' => 'required|date',
            'gender' => 'required|string|max:45',
            'birthplace' => 'required|string|max:255',
            'citizenship' => 'required|string|max:45',
            'civil' => 'required|string|max:45',
            'occupation' => 'required|string|max:255',
            'housenumber' => 'required|integer',
            'street' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user,email',
            'contact' => 'required|digits_between:10,11|unique:user,contact',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|same:password',
        ]);

        // create user
        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'middlename' => $request->middlename,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'place_of_birth' => $request->birthplace,
            'citizenship' => $request->citizenship,
            'civil_status' => $request->civil,
            'occupation' => $request->occupation,
            'house_number' => $request->housenumber,
            'street' => $request->street,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'contact' => $request->contact,
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }
}
