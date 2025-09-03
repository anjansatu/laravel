@extends('admin.layouts.master')

@section('admin-content')
<div class="container-fluid">
    <h4 class="mb-4">Edit SSN</h4>
    <form action="{{ route('admin.ssns.update', $ssn) }}" method="POST" class="col-md-6">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">SSN</label>
            <input type="text" name="ssn" value="{{ old('ssn', $ssn->ssn) }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $ssn->price) }}" class="form-control">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
