@extends('user.master')

@section('title', 'Profile')

@section('user-content')
<div class="container section-padding">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Profile</h3></div>
                <div class="panel-body">
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="mb-4">
                        @csrf
                        <div class="text-center mb-3">
                            @if($user->avatar)
                                <img src="{{ asset('storage/'.$user->avatar) }}" class="img-circle" width="120" height="120" alt="Avatar">
                            @else
                                <img src="https://via.placeholder.com/120" class="img-circle" alt="Avatar">
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Change Avatar</label>
                            <input type="file" name="avatar" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" value="{{ old('username', $user->username) }}" class="form-control" required>
                            @error('username')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save Profile</button>
                    </form>

                    <hr>

                    <h4>Change Password</h4>
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

                    <hr>

                    <h4>Details</h4>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Phone:</strong> {{ $user->phone }}</p>
                    <p><strong>Balance:</strong> {{ rtrim(rtrim(number_format($user->balance,2,'.',''), '0'), '.') }}</p>

                    <a href="{{ route('profile.purchases') }}" class="btn btn-info">View Purchases</a>
                    <a href="{{ route('logout') }}" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
