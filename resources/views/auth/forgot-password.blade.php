@extends('auth.master')

@section('title', 'Forgot Password')

@section('content')

<section class="min-vh-100 d-flex justify-content-center align-items-center">
    <div class="card auth-card" style="width: 100%; max-width: 400px;">
        <div class="card-header text-center">Forgot Password</div>
        <div class="card-body">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Reset Link</button>
            </form>
            <div class="text-center mt-3">
                <a href="{{ route('login') }}">Back to Login</a>
            </div>
        </div>
    </div>
</section>
@endsection
