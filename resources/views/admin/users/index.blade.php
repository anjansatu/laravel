@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <h2>Users</h2>
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Balance</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->balance }}</td>
                <td><a class="btn btn-sm btn-primary" href="{{ route('admin.users.edit', $user) }}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
