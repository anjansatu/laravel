@extends('admin.layouts.master')

@section('admin-content')
<div class="container-fluid">
    <h4 class="mb-4">Gmail List</h4>
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
    <form action="{{ route('admin.gmails.store') }}" method="POST" class="row g-2 mb-4">
        @csrf
        <div class="col-md-4">
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
        </div>
        <div class="col-md-3">
            <input type="number" step="0.01" name="price" class="form-control" placeholder="Price" value="{{ old('price') }}">
        </div>
        <div class="col-md-auto">
            <button class="btn btn-primary">Add</button>
        </div>
    </form>
    <form action="{{ route('admin.gmails.import') }}" method="POST" enctype="multipart/form-data" class="row g-2 mb-4">
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
                    <th>Email</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($gmails as $gmail)
                <tr>
                    <td>{{ $gmail->email }}</td>
                    <td>${{ number_format($gmail->price, 2) }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('admin.gmails.edit', $gmail) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.gmails.destroy', $gmail) }}" method="POST" onsubmit="return confirm('Delete?')">
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
