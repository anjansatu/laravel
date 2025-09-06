@extends('admin.layouts.master')

@section('admin-content')
<div class="container-fluid">
    <h4 class="mb-4">Edit Bank</h4>
    <form action="{{ route('admin.banks.update', $bank) }}" method="POST" class="col-md-6">
        @csrf
        @method('PUT')
        <div class="mb-3"><label class="form-label">First Name</label><input type="text" name="first_name" value="{{ old('first_name', $bank->first_name) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Last Name</label><input type="text" name="last_name" value="{{ old('last_name', $bank->last_name) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Address</label><input type="text" name="address" value="{{ old('address', $bank->address) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">City</label><input type="text" name="city" value="{{ old('city', $bank->city) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">State</label><input type="text" name="state" value="{{ old('state', $bank->state) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">DOB</label><input type="date" name="dob" value="{{ old('dob', $bank->dob) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Account Number</label><input type="text" name="account_number" value="{{ old('account_number', $bank->account_number) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Password</label><input type="text" name="password" value="{{ old('password', $bank->password) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Bank Name</label><input type="text" name="bank_name" value="{{ old('bank_name', $bank->bank_name) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">SSN</label><input type="text" name="ssn" value="{{ old('ssn', $bank->ssn) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Price</label><input type="number" step="0.01" name="price" value="{{ old('price', $bank->price) }}" class="form-control"></div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
