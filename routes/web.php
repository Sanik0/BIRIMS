<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
    Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
    Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::put('/appointment/{id}', [AppointmentController::class, 'update'])->name('appointment.update');
    Route::delete('/appointment/{id}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');
    
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