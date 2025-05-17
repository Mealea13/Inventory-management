@extends('layouts.master')

@section('title', 'Login')

@section('content')
                <div class="container">
            <div class="left-panel">
            <div class="logo"> <img src="{{ asset('img/inventory-logo.png') }}" alt="logo" width="100"> </div>
            <h1>Perfect Inventory</h1>
            <p>More Safety</p>
            <ul class="features">
                <li>📁 Stay Organized, <br> Keep Everything Under Control.</li>
                <li>📊 Get All Your Stats <br> And All Reports with One Click.</li>
                <li>📱 Keep An Eye <br> And Access Wherever You Are.</li>
                <li>🔐 Everything Secured, <br> Security And Safety First.</li>
            </ul>
            </div>

            <div class="right-panel">
            <h2>Welcome back!</h2>
            <form class="login-form">
                <label>Username</label>
                <input type="text" placeholder="@username" / required>

                <label>Password</label>
                <input type="password" placeholder="********" / required>

                <div class="form-options">
                <label><input type="checkbox" /> Keep me logged in?</label>
                <a href="#">forgot password?</a>
                </div>

                <button type="submit" class="login-btn">LOGIN</button>

                <div class="signup-link">
                    Don’t have an account? <a href="{{route('register')}}">Sign up</a>
                </div>


                <div class="divider">or login with</div>

                <button class="social facebook">FACEBOOK</button>
                <button class="social google">GOOGLE</button>
            </form>
            </div>
        </div>
@endsection


