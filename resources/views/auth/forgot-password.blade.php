@extends('auth.master')

@section('title', 'Forgot Password')

@section('content')

<section class="auth-wrapper">
    <div class="card auth-card">
        <div class="card-header text-center">Forgot Password</div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success text-center">{{ session('status') }}</div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
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
