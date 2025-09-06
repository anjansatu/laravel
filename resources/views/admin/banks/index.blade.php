@extends('admin.layouts.master')

@section('admin-content')
<div class="container-fluid">
    <h4 class="mb-4">Bank List</h4>
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.banks.store') }}" method="POST" class="row g-2 mb-4">
        @csrf
        <div class="col-md-2"><input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ old('first_name') }}"></div>
        <div class="col-md-2"><input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ old('last_name') }}"></div>
        <div class="col-md-2"><input type="text" name="address" class="form-control" placeholder="Address" value="{{ old('address') }}"></div>
        <div class="col-md-2"><input type="text" name="city" class="form-control" placeholder="City" value="{{ old('city') }}"></div>
        <div class="col-md-2"><input type="text" name="state" class="form-control" placeholder="State" value="{{ old('state') }}"></div>
        <div class="col-md-2"><input type="date" name="dob" class="form-control" value="{{ old('dob') }}"></div>
        <div class="col-md-2"><input type="text" name="account_number" class="form-control" placeholder="Account" value="{{ old('account_number') }}"></div>
        <div class="col-md-2"><input type="text" name="password" class="form-control" placeholder="Password" value="{{ old('password') }}"></div>
        <div class="col-md-2"><input type="text" name="bank_name" class="form-control" placeholder="Bank Name" value="{{ old('bank_name') }}"></div>
        <div class="col-md-2"><input type="text" name="ssn" class="form-control" placeholder="SSN" value="{{ old('ssn') }}"></div>
        <div class="col-md-2"><input type="number" step="0.01" name="price" class="form-control" placeholder="Price" value="{{ old('price') }}"></div>
        <div class="col-md-auto"><button class="btn btn-primary">Add</button></div>
    </form>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
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
                    <td class="d-flex gap-2">
                        <a href="{{ route('admin.banks.edit', $bank) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.banks.destroy', $bank) }}" method="POST" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
