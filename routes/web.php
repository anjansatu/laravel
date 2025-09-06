<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::prefix('user')->group(__DIR__.'/user.php');
Route::prefix('admin')->group(__DIR__.'/admin.php');

