<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AppointmentController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/settings', function () {
    return view('settings');
});
Route::get('/notifications', function () {
    return view('notifications');
});
Route::get('/orders', function () {
    return view('orders');
});
Route::get('/documents', function () {
    return view('documents');
});
Route::get('/blotter', function () {
    return view('blotter');
});
Route::get('/appointment', function () {
    return view('appointment');
});
Route::get('/announcements', function () {
    return view('announcements');
});
Route::get('/verify', function () {
    return view('verify');
});
Route::get('/document', function () {
    return view('document');
});
Route::get('/admin/home', function () {
    return view('admin.home');
});
Route::get('/admin/settings', function () {
    return view('admin.settings');
});

// Admin User Routes
Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
Route::post('/admin/users', [UserController::class, 'store'])->name('users.store');
Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('users.update');

Route::get('/admin/orders', function () {
    return view('admin.orders');
});

// Admin Announcement Routes
Route::get('/admin/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
Route::post('/admin/announcements', [AnnouncementController::class, 'store'])->name('announcements.store');
Route::put('/admin/announcements/{id}', [AnnouncementController::class, 'update'])->name('announcements.update');
Route::delete('/admin/announcements/{id}', [AnnouncementController::class, 'destroy'])->name('announcements.destroy');

// Admin Appointment Routes
Route::get('/admin/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
Route::post('/admin/appointment', [AppointmentController::class, 'store'])->name('appointment.store');
Route::delete('/admin/appointment/{id}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');

// User lookup for appointments
Route::get('/lookup-user', function () {
    $email = request('email');

    if (!$email) {
        return response()->json([
            'success' => false,
            'message' => 'No email provided'
        ]);
    }

    $user = App\Models\User::where('email', $email)->first(['user_id', 'firstname', 'lastname', 'middlename']);

    if ($user) {
        return response()->json([
            'success' => true,
            'user' => $user
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'User not found'
    ]);
});

Route::get('/admin/verifications', function () {
    return view('admin.verifications');
});
Route::get('/admin/blotters', function () {
    return view('admin.blotters');
});
