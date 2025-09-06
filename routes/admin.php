<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Admin\DepositController as AdminDepositController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use App\Http\Controllers\Admin\SsnController as AdminSsnController;
use App\Http\Controllers\Admin\GmailController as AdminGmailController;
use App\Http\Controllers\Admin\BankController as AdminBankController;

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

    Route::post('/ssns/import', [AdminSsnController::class, 'import'])->name('admin.ssns.import');
    Route::resource('/ssns', AdminSsnController::class)->except(['show', 'create'])->names('admin.ssns');

    Route::post('/gmails/import', [AdminGmailController::class, 'import'])->name('admin.gmails.import');
    Route::resource('/gmails', AdminGmailController::class)->except(['show', 'create'])->names('admin.gmails');

    Route::resource('/banks', AdminBankController::class)->except(['show', 'create'])->names('admin.banks');
});

