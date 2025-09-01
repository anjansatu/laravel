@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <h2>Pending Deposits</h2>
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>User</th>
                <th>Amount</th>
                <th>Currency</th>
                <th>Status</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deposits as $deposit)
            <tr>
                <td>{{ $deposit->user->username }}</td>
                <td>{{ $deposit->amount }}</td>
                <td>{{ $deposit->currency }}</td>
                <td>{{ $deposit->status }}</td>
                <td>{{ $deposit->created_at }}</td>
                <td class="d-flex">
                    <form method="POST" action="{{ route('admin.deposits.approve', $deposit) }}" class="me-2">
                        @csrf
                        <button class="btn btn-sm btn-success">Approve</button>
                    </form>
                    <form method="POST" action="{{ route('admin.deposits.reject', $deposit) }}">
                        @csrf
                        <button class="btn btn-sm btn-danger">Reject</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
