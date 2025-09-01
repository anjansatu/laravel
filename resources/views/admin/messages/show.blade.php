@extends('admin.layouts.master')
@section('admin-content')
<div class="container mt-4">
    <h2 class="mb-4">Chat with {{ $user->username }}</h2>
    <div class="mb-3" style="max-height:300px; overflow-y:auto;">
        @foreach($messages as $message)
            <div class="mb-2">
                <strong>{{ $message->sender === 'admin' ? 'You' : $user->username }}:</strong>
                {{ $message->message }}
            </div>
        @endforeach
    </div>
    <form method="POST" action="{{ route('admin.messages.store', $user) }}">
        @csrf
        <div class="input-group">
            <input type="text" name="message" class="form-control" placeholder="Type your reply">
            <button class="btn btn-primary" type="submit">Send</button>
        </div>
    </form>
</div>
@endsection
