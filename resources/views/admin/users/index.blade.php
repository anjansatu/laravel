@extends('admin.layouts.master')

@section('admin-content')
<div class="container mt-5">
    <h2>Users</h2>
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <table class="table table-bordered table-colorful" id="usersTable">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Balance</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->status }}</td>
                <td>{{ $user->balance }}</td>
                <td><a class="btn btn-sm btn-primary" href="{{ route('admin.users.edit', $user) }}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@push('scripts')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new DataTable('#usersTable');
    });
</script>
@endpush
@endsection
