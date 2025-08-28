@extends('layouts.master')

@section('content')
<div class="dashboard">
    <h2>Dashboard</h2>
    <p>Hello, {{ auth()->user()->username }}</p>
    <div class="cards">
        <div class="card">Sample Card 1</div>
        <div class="card">Sample Card 2</div>
    </div>
</div>
@endsection
