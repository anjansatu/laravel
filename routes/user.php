<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\ProfileController;

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

    Route::get('/deposit', [DepositController::class, 'index'])->name('deposit.index');
    Route::get('/deposit/create', [DepositController::class, 'create'])->name('deposit.create');
    Route::post('/deposit', [DepositController::class, 'store'])->name('deposit.store');
    Route::get('/deposit/history', [DepositController::class, 'history'])->name('deposit.history');

    Route::get('/portal-mail', [MarketplaceController::class, 'portalMail'])->name('portal-mail.index');
    Route::post('/portal-mail/purchase', [MarketplaceController::class, 'purchaseMail'])->name('portal-mail.purchase');
    Route::get('/ssn', [MarketplaceController::class, 'ssn'])->name('ssn.index');
    Route::post('/ssn/purchase', [MarketplaceController::class, 'purchaseSsn'])->name('ssn.purchase');
    Route::get('/bank', [MarketplaceController::class, 'bank'])->name('bank.index');
    Route::post('/bank/purchase', [MarketplaceController::class, 'purchaseBank'])->name('bank.purchase');

    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::post('/chat', [ChatController::class, 'store'])->name('chat.store');

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.details');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/password', [ProfileController::class, 'password'])->name('profile.password.edit');
    Route::post('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password');
    Route::get('/profile/purchases', [ProfileController::class, 'purchases'])->name('profile.purchases');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

