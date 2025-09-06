@extends('user.master')

@section('title', 'Change Password')

@section('user-content')
<div class="container section-padding">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Change Password</h3></div>
                <div class="panel-body">
                    <form action="{{ route('profile.password') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Current Password</label>
                            <input type="password" name="current_password" class="form-control" required>
                            @error('current_password')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="password" class="form-control" required>
                            @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-warning">Update Password</button>
                        <a href="{{ route('password.request') }}" class="btn btn-link">Request OTP Reset</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
