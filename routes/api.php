<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
|
| Routes for user registration, login, and logout. Typically handled by
| an AuthController and some may require authentication middleware.
|
*/
Route::post('/register', [AuthController::class, 'register']);
