<?php

use App\Http\Controllers\Ui\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ui\RegisterController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Route::get('/login', [LoginController::class, 'showRegistrationForm'])->name('login');
