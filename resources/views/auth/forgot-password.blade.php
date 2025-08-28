@extends('layouts.master')

@section('user-content')
<div class="auth-form">
    <h2>Forgot Password</h2>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div>
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>
        <button type="submit">Send Reset Link</button>
    </form>
    <div class="links">
        <a href="{{ route('login') }}">Back to Login</a>
    </div>
</div>
@endsection
