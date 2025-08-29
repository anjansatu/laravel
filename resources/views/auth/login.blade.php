@extends('auth.master')

@section('title', 'Login')

@section('content')
<section class="auth-wrapper w-100">
    <div class="card auth-card w-100" style="max-width: 400px;">
        <div class="card-header text-center">Login</div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="login" class="form-label">Username / Email / Phone</label>
                    <input type="text" name="login" id="login" class="form-control" value="{{ old('login') }}" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <div class="text-center mt-3">
                <a href="{{ route('password.request') }}" class="d-block">Forgot Password?</a>
                <a href="{{ route('register') }}" class="d-block">Register</a>
            </div>
        </div>
    </div>
</section>
@endsection
