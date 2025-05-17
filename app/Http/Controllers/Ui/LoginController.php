<?php

namespace App\Http\Controllers\Ui;

use Illuminate\Http\Request;
Use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.login'); // Make sure this Blade file exists
    }

    // You can also add your registration logic here later
}
