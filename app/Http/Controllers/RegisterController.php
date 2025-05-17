<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // Make sure this Blade file exists
    }

    // You can also add your registration logic here later
}
