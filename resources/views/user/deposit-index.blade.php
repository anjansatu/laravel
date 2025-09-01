@extends('user.master')

@section('user-content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-body text-center py-5">
                    <h2 class="mb-4">Deposit</h2>
                    <a href="{{ route('deposit.create') }}" class="btn btn-primary m-2">Make Deposit</a>
                    <a href="{{ route('deposit.history') }}" class="btn btn-secondary m-2">Deposit History</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
