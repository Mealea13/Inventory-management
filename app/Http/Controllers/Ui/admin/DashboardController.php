<?php

namespace App\Http\Controllers\Ui\admin;

use Illuminate\Http\Request;
Use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.dashboard.dashboard'); // Make sure this Blade file exists
    }

    // You can also add your registration logic here later
}
