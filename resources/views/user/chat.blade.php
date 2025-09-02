@extends('user.master')

@section('user-content')
<div class="container mt-5">
    <h2 class="mb-4">Chat with Admin</h2>
    <div class="chat-window mb-3">
        @foreach($messages as $message)
            <div class="d-flex {{ $message->sender === 'user' ? 'justify-content-end' : 'justify-content-start' }}">
                <div class="chat-bubble {{ $message->sender === 'user' ? 'user' : 'admin' }}">
                    {{ $message->message }}
                </div>
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
