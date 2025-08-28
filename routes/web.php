<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminAuthController;

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

