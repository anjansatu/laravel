@extends('layouts.master')

@section('user-content')
<div class="auth-form">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="login">Username / Email / Phone</label>
            <input type="text" name="login" id="login" value="{{ old('login') }}" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label><input type="checkbox" name="remember"> Remember Me</label>
        </div>
        <button type="submit">Login</button>
    </form>
    <div class="links">
        <a href="{{ route('password.request') }}">Forgot Password?</a>
        <a href="{{ route('register') }}">Register</a>
    </div>
</div>
@endsection
