@extends('admin.layouts.master')
@section('admin-content')
<div class="container mt-4">
    <h2 class="mb-4">User Messages</h2>
    <ul>
        @foreach($users as $user)
            <li><a href="{{ route('admin.messages.show', $user) }}">{{ $user->username }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
