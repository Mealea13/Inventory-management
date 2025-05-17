@extends('layouts.master')

@section('title', 'Register')

@section('content')
<div class="register-panel">
  <h2>Create your account</h2>
  <form class="register-form">
    <label>Username</label>
    <input type="text" placeholder="@username" required />

    <label>Email</label>
    <input type="email" placeholder="example@email.com" required />

    <label>Password</label>
    <input type="password" placeholder="********" required />

    <label>Confirm Password</label>
    <input type="password" placeholder="********" required />

    <button type="submit" class="register-btn">REGISTER</button>
  </form>

  <div class="signup-link">
    Already have an account? <a href="{{route('login')}}">Log in</a>
  </div>
</div>
@endsection
