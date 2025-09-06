@extends('user.master')

@section('title', 'Profile')

@section('user-content')
<div class="container section-padding">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Profile Details</h3></div>
                <div class="panel-body">
                    <div class="text-center mb-3">
                        @if($user->avatar)
                            <img src="{{ asset('storage/'.$user->avatar) }}" class="img-circle" width="120" height="120" alt="Avatar">
                        @else
                            <img src="https://via.placeholder.com/120" class="img-circle" alt="Avatar">
                        @endif
                    </div>
                    <p><strong>Username:</strong> {{ $user->username }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Phone:</strong> {{ $user->phone }}</p>
                    <p><strong>Balance:</strong> {{ rtrim(rtrim(number_format($user->balance,2,'.',''), '0'), '.') }}</p>
                    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                    <a href="{{ route('profile.password.edit') }}" class="btn btn-warning">Change Password</a>
                    <a href="{{ route('profile.purchases') }}" class="btn btn-info">Purchases</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
