@extends('user.master')

@section('user-content')
<div class="container mt-5">
    <h2 class="mb-4">Chat with Admin</h2>
    <div class="mb-3" style="max-height:300px; overflow-y:auto;">
        @foreach($messages as $message)
            <div class="mb-2">
                <strong>{{ $message->sender === 'user' ? 'You' : 'Admin' }}:</strong>
                {{ $message->message }}
            </div>
        @endforeach
    </div>
    <form method="POST" action="{{ route('chat.store') }}">
        @csrf
        <div class="input-group">
            <input type="text" name="message" class="form-control" placeholder="Type your message">
            <button class="btn btn-primary" type="submit">Send</button>
        </div>
    </form>
</div>
@endsection
