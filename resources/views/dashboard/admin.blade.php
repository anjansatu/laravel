@extends('layouts.master')

@section('content')
<div class="dashboard">
    <h2>Admin Dashboard</h2>
    <p>Welcome, {{ auth()->user()->username }}</p>
    <div class="cards">
        <div class="card">Admin Card 1</div>
        <div class="card">Admin Card 2</div>
    </div>
</div>
@endsection
