<?php

namespace App\Http\Controllers\Ui;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // Make sure this Blade file exists
    }

    // You can also add your registration logic here later
}
