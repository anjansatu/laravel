@extends('admin.layouts.master')

@section('admin-content')
<div class="container-fluid">
    <h4 class="mb-4">Edit SSN</h4>
    <form action="{{ route('admin.ssns.update', $ssn) }}" method="POST" class="col-md-6">
        @csrf
        @method('PUT')
        <div class="mb-3"><label class="form-label">First Name</label><input type="text" name="first_name" value="{{ old('first_name', $ssn->first_name) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Last Name</label><input type="text" name="last_name" value="{{ old('last_name', $ssn->last_name) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">City</label><input type="text" name="city" value="{{ old('city', $ssn->city) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">State</label><input type="text" name="state" value="{{ old('state', $ssn->state) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">SSN</label><input type="text" name="ssn" value="{{ old('ssn', $ssn->ssn) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">DOB</label><input type="date" name="dob" value="{{ old('dob', $ssn->dob) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Year</label><input type="number" name="year" value="{{ old('year', $ssn->year) }}" class="form-control"></div>
        <div class="mb-3"><label class="form-label">Price</label><input type="number" step="0.01" name="price" value="{{ old('price', $ssn->price) }}" class="form-control"></div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
