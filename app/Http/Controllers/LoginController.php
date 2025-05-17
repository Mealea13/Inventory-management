<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.login'); // Make sure this Blade file exists
    }

    // You can also add your registration logic here later
}
