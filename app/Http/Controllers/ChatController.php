<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        $messages = Message::where('user_id', $request->user()->id)
            ->orderBy('created_at')
            ->get();

        Message::where('user_id', $request->user()->id)
            ->where('sender', 'admin')
            ->whereNull('read_at')
            ->update(['read_at' => now()]);

        return view('user.chat', compact('messages'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'message' => ['required', 'string'],
        ]);

        Message::create([
            'user_id' => $request->user()->id,
            'sender' => 'user',
            'message' => $data['message'],
        ]);

        return back()->with('status', 'Message sent.');
    }
}
