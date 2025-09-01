@extends('user.master')

@section('content')
<div class="container mt-5 text-center">
    <h2>Deposit</h2>
    <a href="{{ route('deposit.create') }}" class="btn btn-primary m-2">Make Deposit</a>
    <a href="{{ route('deposit.history') }}" class="btn btn-secondary m-2">Deposit History</a>
</div>
@endsection
