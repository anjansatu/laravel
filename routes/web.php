<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\Admin\DepositController as AdminDepositController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;

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

    Route::get('/deposit', [DepositController::class, 'index'])->name('deposit.index');
    Route::get('/deposit/create', [DepositController::class, 'create'])->name('deposit.create');
    Route::post('/deposit', [DepositController::class, 'store'])->name('deposit.store');
    Route::get('/deposit/history', [DepositController::class, 'history'])->name('deposit.history');

    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::post('/chat', [ChatController::class, 'store'])->name('chat.store');

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

        Route::get('/deposits/pending', [AdminDepositController::class, 'pending'])->name('admin.deposits.pending');
        Route::get('/deposits/completed', [AdminDepositController::class, 'completed'])->name('admin.deposits.completed');
        Route::get('/deposits/rejected', [AdminDepositController::class, 'rejected'])->name('admin.deposits.rejected');
        Route::post('/deposits/{deposit}/approve', [AdminDepositController::class, 'approve'])->name('admin.deposits.approve');
        Route::post('/deposits/{deposit}/reject', [AdminDepositController::class, 'reject'])->name('admin.deposits.reject');

        Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users.index');
        Route::get('/users/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
        Route::put('/users/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');

        Route::get('/messages', [AdminMessageController::class, 'index'])->name('admin.messages.index');
        Route::get('/messages/{user}', [AdminMessageController::class, 'show'])->name('admin.messages.show');
        Route::post('/messages/{user}', [AdminMessageController::class, 'store'])->name('admin.messages.store');
    });
});
