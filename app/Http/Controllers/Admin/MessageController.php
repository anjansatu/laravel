<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $users = Message::with('user')
            ->select('user_id')
            ->groupBy('user_id')
            ->get()
            ->pluck('user');

        return view('admin.messages.index', ['users' => $users]);
    }

    public function show(User $user)
    {
        $messages = Message::where('user_id', $user->id)
            ->orderBy('created_at')
            ->get();

        Message::where('user_id', $user->id)
            ->where('sender', 'user')
            ->whereNull('read_at')
            ->update(['read_at' => now()]);

        return view('admin.messages.show', compact('user', 'messages'));
    }

    public function store(Request $request, User $user)
    {
        $data = $request->validate([
            'message' => ['required', 'string'],
        ]);

        Message::create([
            'user_id' => $user->id,
            'sender' => 'admin',
            'message' => $data['message'],
        ]);

        return back()->with('status', 'Reply sent.');
    }
}
