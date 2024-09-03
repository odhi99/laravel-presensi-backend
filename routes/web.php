<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.auth-login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {
        return view('pages.dashboard', ['type_menu' => 'home']);
    })->name('dashboard');

    // Route::resource('user', UserController::class);
});
