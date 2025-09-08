<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::view('/', 'home');

Route::prefix('user')->group(__DIR__.'/user.php');
Route::prefix('admin')->group(__DIR__.'/admin.php');

Route::get('/logs', function () {
    $path = storage_path('logs/laravel.log');

    if (!File::exists($path)) {
        abort(404, 'Log file not found.');
    }

    return response('<pre>'.e(File::get($path)).'</pre>');
})->name('logs');

