@extends('user.master')

@section('content')
<div class="container mt-5">
    <h2>Deposit History</h2>
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Address</th>
                <th>Amount</th>
                <th>Currency</th>
                <th>Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deposits as $deposit)
            <tr>
                <td>{{ $deposit->address }}</td>
                <td>{{ $deposit->amount }}</td>
                <td>{{ $deposit->currency }}</td>
                <td>{{ $deposit->created_at }}</td>
                <td>{{ $deposit->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
