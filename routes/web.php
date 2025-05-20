<?php

use App\Http\Controllers\Ui\admin\DashboardController;
use App\Http\Controllers\Ui\admin\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ui\admin\RegisterController;

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/login', [LoginController::class, 'showRegistrationForm'])->name('login');
Route::get('/dashboard', [DashboardController::class , "showRegistrationForm"])->name('dashboard');
