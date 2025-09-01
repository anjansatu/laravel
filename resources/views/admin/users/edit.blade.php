@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <h2>Edit {{ $user->username }}</h2>
    <form method="POST" action="{{ route('admin.users.update', $user) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="balance" class="form-label">Balance</label>
            <input type="number" step="0.01" name="balance" id="balance" value="{{ $user->balance }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    <h3 class="mt-4">Deposit History</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Amount</th>
                <th>Currency</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user->deposits as $deposit)
            <tr>
                <td>{{ $deposit->amount }}</td>
                <td>{{ $deposit->currency }}</td>
                <td>{{ $deposit->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
