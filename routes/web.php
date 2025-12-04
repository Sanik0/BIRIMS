<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlotterController;
use App\Http\Controllers\UserAppointmentController;
use App\Http\Controllers\VerificationController;

// Public routes
// Route::get('/', function () {
//     return view(''); // Landing page (not logged in home)
// });

// Public routes
Route::get('/signin', [LoginController::class, 'show'])->name('login');
Route::post('/signin', [LoginController::class, 'login'])->name('signin.post');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');
Route::post('/signup', [RegisterController::class, 'store'])->name('signup.store');

// Protected User Routes (require login)
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');

    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::put('/password/update', [ProfileController::class, 'updatePassword'])->name('password.update');

    Route::get('/notifications', function () {
        return view('notifications');
    });

    Route::get('/orders', function () {
        return view('orders');
    });

    Route::get('/documents', function () {
        return view('documents');
    });

    Route::get('/blotter', [BlotterController::class, 'create'])->name('blotter.create');
    Route::post('/blotter', [BlotterController::class, 'store'])->name('blotter.store');
    Route::delete('/blotter/{id}', [BlotterController::class, 'destroy'])->name('blotter.destroy');

    Route::middleware(['auth'])->group(function () {
        Route::get('/appointment', [UserAppointmentController::class, 'create'])->name('appointment.create');
        Route::post('/appointment', [UserAppointmentController::class, 'store'])->name('appointment.store');
        Route::delete('/appointment/{id}', [UserAppointmentController::class, 'destroy'])->name('appointment.destroy');
    });
    Route::get('/announcements', [AnnouncementsController::class, 'index'])->name('announcements.index');

    Route::get('/verify', [VerificationController::class, 'index'])->name('verify.index');
    Route::post('/verify', [VerificationController::class, 'store'])->name('verify.store');

    Route::get('/document', function () {
        return view('document');
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Protected Admin Routes (require login)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/home', function () {
        return view('admin.home');
    })->name('admin.home');

    Route::get('/settings', function () {
        return view('admin.settings');
    });

    // Admin User Routes
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/orders', function () {
        return view('admin.orders');
    });

    // Admin Announcement Routes
    Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
    Route::post('/announcements', [AnnouncementController::class, 'store'])->name('announcements.store');
    Route::put('/announcements/{id}', [AnnouncementController::class, 'update'])->name('announcements.update');
    Route::delete('/announcements/{id}', [AnnouncementController::class, 'destroy'])->name('announcements.destroy');

    // Admin Appointment Routes
    Route::get('/appointment', [AppointmentController::class, 'index'])->name('admin.appointment.index');
    Route::post('/appointment', [AppointmentController::class, 'store'])->name('admin.appointment.store');
    Route::put('/appointment/{id}', [AppointmentController::class, 'update'])->name('admin.appointment.update');
    Route::delete('/appointment/{id}', [AppointmentController::class, 'destroy'])->name('admin.appointment.destroy');

    Route::get('/verifications', function () {
        return view('admin.verifications');
    });

    Route::get('/blotters', function () {
        return view('admin.blotters');
    });
});

// User lookup API (public or protected - your choice)
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
