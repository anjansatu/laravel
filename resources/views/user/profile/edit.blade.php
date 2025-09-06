@extends('user.master')

@section('title', 'Edit Profile')

@section('user-content')
<div class="container section-padding">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Edit Profile</h3></div>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
