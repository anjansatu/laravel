@extends('user.master')

@section('user-content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-grey shadow-lg">
                <div class="card-header text-center">Banks</div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0 table-colorful">
                            <thead class="table-light">
                                <tr>
                                    <th>First</th>
                                    <th>Last</th>
                                    <th>Account</th>
                                    <th>Bank</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($banks as $bank)
                                <tr>
                                    <td>{{ $bank->first_name }}</td>
                                    <td>{{ $bank->last_name }}</td>
                                    <td>{{ $bank->account_number }}</td>
                                    <td>{{ $bank->bank_name }}</td>
                                    <td>${{ number_format($bank->price, 2) }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('bank.purchase') }}">
                                            @csrf
                                            <input type="hidden" name="bank_id" value="{{ $bank->id }}">
                                            <button class="btn btn-success btn-sm">Purchase</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
