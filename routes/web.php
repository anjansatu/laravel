<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminAuthController;

// Route::get('/', function () {
//     return auth()->check()
//         ? redirect()->route('dashboard')
//         : view('auth.login');
// });

Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:login');
    Route::get('/password/forgot', [PasswordResetController::class, 'showForgot'])->name('password.request');
    Route::post('/password/otp', [PasswordResetController::class, 'sendOtp'])->name('password.email');
    Route::get('/password/reset', [PasswordResetController::class, 'showReset'])->name('password.reset');
    Route::post('/password/reset', [PasswordResetController::class, 'resetPassword'])->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::get('/admin/dashboard', [AuthController::class, 'adminDashboard'])->name('admin.dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/', function () {
    return view('home');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::get('/forgot-password', [AdminAuthController::class, 'showForgotForm'])->name('admin.forgot');
    Route::post('/forgot-password', [AdminAuthController::class, 'sendOtp'])->name('admin.forgot.submit');
    Route::get('/otp', [AdminAuthController::class, 'showOtpForm'])->name('admin.otp');
    Route::post('/otp', [AdminAuthController::class, 'verifyOtp'])->name('admin.otp.submit');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    });
});
