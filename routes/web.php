<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.auth-login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {
        return view('pages.dashboard', ['type_menu' => 'dashboard']);
    })->name('dashboard');

    Route::resource('user', UserController::class);
});
