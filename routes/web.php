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
use App\Http\Controllers\OrderController; // Add this
use App\Http\Controllers\AdminOrderController; // Add this  
use App\Http\Controllers\NotificationController;

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
        $announcements = \App\Models\Announcement::orderBy('created_at', 'desc')
            ->take(1)
            ->get();

        return view('home', compact('announcements'));
    })->name('home');

    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');

    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::put('/password/update', [ProfileController::class, 'updatePassword'])->name('password.update');

    Route::get('/notifications', function () {
        return view('notifications');
    });

    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

    Route::get('/documents', function () {
        return view('documents');
    });

    // Notification routes
    Route::get('/notifications', [App\Http\Controllers\NotificationController::class, 'index'])->name('notifications.index');
    Route::post('/notifications/{id}/read', [App\Http\Controllers\NotificationController::class, 'markAsRead'])->name('notifications.read');
    Route::delete('/notifications/{id}', [App\Http\Controllers\NotificationController::class, 'destroy'])->name('notifications.destroy');

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
    Route::delete('/verify/delete', [VerificationController::class, 'delete'])->name('verify.delete');

    // Document/Order routes - UPDATED
    Route::get('/document', [OrderController::class, 'create'])->name('document.create');
    Route::post('/document', [OrderController::class, 'store'])->name('document.store');
    Route::get('/document/{id}', [OrderController::class, 'show'])->name('document.show');
    Route::delete('/document/{id}', [OrderController::class, 'destroy'])->name('document.destroy');

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

    // With these lines:
    Route::get('/orders', [App\Http\Controllers\AdminOrderController::class, 'index'])->name('admin.orders.index');
    Route::put('/orders/{id}', [App\Http\Controllers\AdminOrderController::class, 'update'])->name('admin.orders.update');
    Route::delete('/orders/{id}', [App\Http\Controllers\AdminOrderController::class, 'destroy'])->name('admin.orders.destroy');
    Route::get('/orders/{id}', [App\Http\Controllers\AdminOrderController::class, 'show'])->name('admin.orders.show');

    // Admin Announcement Routes
    Route::delete('/announcements/{id}', [AnnouncementController::class, 'destroy'])->name('announcements.destroy');
    Route::put('/announcements/{id}', [AnnouncementController::class, 'update'])->name('announcements.update');
    Route::post('/announcements', [AnnouncementController::class, 'store'])->name('announcements.store');
    Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');

    // Admin Appointment Routes
    Route::get('/appointment', [AppointmentController::class, 'index'])->name('admin.appointment.index');
    Route::post('/appointment', [AppointmentController::class, 'store'])->name('admin.appointment.store');
    Route::put('/appointment/{id}', [AppointmentController::class, 'update'])->name('admin.appointment.update');
    Route::delete('/appointment/{id}', [AppointmentController::class, 'destroy'])->name('admin.appointment.destroy');

    // Admin Verification Routes
    Route::get('/verifications', [App\Http\Controllers\AdminVerificationController::class, 'index'])->name('admin.verifications.index');
    Route::get('/verifications/{id}', [App\Http\Controllers\AdminVerificationController::class, 'show'])->name('admin.verifications.show');
    Route::post('/verifications/{id}/verify', [App\Http\Controllers\AdminVerificationController::class, 'verify'])->name('admin.verifications.verify');
    Route::post('/verifications/{id}/reject', [App\Http\Controllers\AdminVerificationController::class, 'reject'])->name('admin.verifications.reject');

    // Admin Blotter Routes
    Route::get('/blotters', [App\Http\Controllers\AdminBlotterController::class, 'index'])->name('admin.blotters.index');
    Route::put('/blotters/{id}', [App\Http\Controllers\AdminBlotterController::class, 'update'])->name('admin.blotters.update');
    Route::delete('/blotters/{id}', [App\Http\Controllers\AdminBlotterController::class, 'destroy'])->name('admin.blotters.destroy');
});

// API Routes
Route::get('/api/document-fields/{id}', [OrderController::class, 'getDocumentFields'])->name('api.document.fields');

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
