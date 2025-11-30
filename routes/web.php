<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
// Show users + create form
Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');

// Handle form submission
Route::post('/admin/users', [UserController::class, 'store'])->name('users.store');
// Delete user
Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/admin/orders', function () {
    return view('admin.orders');
});
Route::get('/admin/announcements', function () {
    return view('admin.announcements');
});
Route::get('/admin/appointment', function () {
    return view('admin.appointment');
});
Route::get('/admin/verifications', function () {
    return view('admin.verifications');
});
Route::get('/admin/blotters', function () {
    return view('admin.blotters');
});
