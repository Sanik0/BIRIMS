<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Show Users
    public function index(Request $request)
    {
        $query = User::query();

        // Search by name (firstname, lastname, or middlename)
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('firstname', 'LIKE', "%{$search}%")
                    ->orWhere('lastname', 'LIKE', "%{$search}%")
                    ->orWhere('middlename', 'LIKE', "%{$search}%");
            });
        }

        $users = $query->paginate(10);

        return view('admin.users', compact('users'));
    }

    // Create User
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
            'occupation' => 'nullable|string|max:255',
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

    // Update User
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validate input
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'birthdate' => 'required|date',
            'gender' => 'required|string|max:45',
            'birthplace' => 'nullable|string|max:255',
            'citizenship' => 'nullable|string|max:45',
            'civil' => 'nullable|string|max:45',
            'occupation' => 'nullable|string|max:255',
            'housenumber' => 'nullable|integer',
            'street' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:user,email,' . $id . ',user_id',
            'contact' => 'required|digits_between:10,11|unique:user,contact,' . $id . ',user_id',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Update user data
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->middlename = $request->middlename;
        $user->birthdate = $request->birthdate;
        $user->gender = $request->gender;
        $user->place_of_birth = $request->birthplace;
        $user->citizenship = $request->citizenship;
        $user->civil_status = $request->civil;
        $user->occupation = $request->occupation;
        $user->house_number = $request->housenumber;
        $user->street = $request->street;
        $user->email = $request->email;
        $user->contact = $request->contact;

        // Only update password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }
    

    // Delete User
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
