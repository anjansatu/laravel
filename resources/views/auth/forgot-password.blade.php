@extends('auth.master')

@section('title', 'Forgot Password')

@section('content')

<section class="auth-wrapper">
    <div class="card auth-card">
        <div class="card-header text-center">Forgot Password</div>
        <div class="card-body">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send OTP</button>
            </form>
            <div class="text-center mt-3">
                <a href="{{ route('login') }}">Back to Login</a>
            </div>
        </div>
    </div>
</section>
@endsection
