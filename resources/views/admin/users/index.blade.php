@extends('admin.layouts.master')

@section('admin-content')
<div class="container mt-5">
    <h2>Users</h2>
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <table class="table table-bordered table-colorful" id="usersTable">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
                <th>Balance</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
@push('styles')
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendors/datatables.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendors/datatable-extension.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('backend/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/datatable/datatables/datatable.custom.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        $('#usersTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.users.data') }}',
            columns: [
                {data: 'username', name: 'username'},
                {data: 'email', name: 'email'},
                {data: 'phone', name: 'phone'},
                {data: 'status', name: 'status'},
                {data: 'balance', name: 'balance'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>
@endpush
@endsection
