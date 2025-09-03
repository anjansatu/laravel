@extends('user.master')

@section('user-content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-grey shadow-lg">
                <div class="card-header text-center">Deposit</div>
                <div class="card-body p-4">
                    @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    <form method="POST" action="{{ route('deposit.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="number" step="0.01" name="amount" id="amount" class="form-control" placeholder="Enter amount" required autofocus>
                            @error('amount')<div class="text-danger small">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Deposit Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Enter deposit address" required>
                            @error('address')<div class="text-danger small">{{ $message }}</div>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="currency" class="form-label">Currency</label>
                            <select name="currency" id="currency" class="form-control" required>
                                <option value="USD">USD</option>
                                <option value="CRYPTO">CRYPTO</option>
                            </select>
                            @error('currency')<div class="text-danger small">{{ $message }}</div>@enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100">Submit Deposit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
