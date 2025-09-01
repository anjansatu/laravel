@extends('user.master')

@section('content')
<div class="container mt-5">
    <h2>Deposit</h2>
    <form method="POST" action="{{ route('deposit.store') }}">
        @csrf
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" step="0.01" name="amount" id="amount" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="currency" class="form-label">Currency</label>
            <select name="currency" id="currency" class="form-control" required>
                <option value="USD">USD</option>
                <option value="CRYPTO">CRYPTO</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
