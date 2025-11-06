<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/admin/users', function () {
    return view('admin.users');
});
Route::get('/admin/orders', function () {
    return view('admin.orders');
});
Route::get('/admin/announcements', function () {
    return view('admin.announcements');
});
