@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <h2>Deposits</h2>
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
                <td>
                    @if($deposit->status === 'pending')
                    <form method="POST" action="{{ route('admin.deposits.approve', $deposit) }}">
                        @csrf
                        <button class="btn btn-sm btn-primary">Approve</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
