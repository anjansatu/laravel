@extends('auth.master')

@section('title', 'Reset Password')

@section('content')

<section class="auth-wrapper">
    <div class="card auth-card">
        <div class="card-header text-center">Reset Password</div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger text-center">{{ $errors->first() }}</div>
            @endif
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="email" value="{{ old('email', session('otp_email')) }}">
                <div class="mb-3">
                    <label for="otp" class="form-label">OTP</label>
                    <input type="text" name="otp" id="otp" class="form-control" required placeholder="123456" autofocus>
                    @error('otp')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                    @error('password')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Reset Password</button>
            </form>
        </div>
    </div>
</section>
@endsection
