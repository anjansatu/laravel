@extends('admin.layouts.master')

@section('admin-content')
<div class="container-fluid">
    <h4 class="mb-4">SSN List</h4>
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
    <form action="{{ route('admin.ssns.store') }}" method="POST" class="row g-2 mb-4">
        @csrf
        <div class="col-md-4">
            <input type="text" name="ssn" class="form-control" placeholder="SSN" value="{{ old('ssn') }}">
        </div>
        <div class="col-md-3">
            <input type="number" step="0.01" name="price" class="form-control" placeholder="Price" value="{{ old('price') }}">
        </div>
        <div class="col-md-auto">
            <button class="btn btn-primary">Add</button>
        </div>
    </form>
    <form action="{{ route('admin.ssns.import') }}" method="POST" enctype="multipart/form-data" class="row g-2 mb-4">
        @csrf
        <div class="col-md-4">
            <input type="file" name="file" class="form-control" accept=".xlsx,.csv">
        </div>
        <div class="col-md-auto">
            <button class="btn btn-secondary">Import</button>
        </div>
    </form>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>SSN</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($ssns as $ssn)
                <tr>
                    <td>{{ $ssn->ssn }}</td>
                    <td>${{ number_format($ssn->price, 2) }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('admin.ssns.edit', $ssn) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.ssns.destroy', $ssn) }}" method="POST" onsubmit="return confirm('Delete?')">
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
