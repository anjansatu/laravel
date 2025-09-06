<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function data()
    {
        $users = User::select(['id', 'username', 'email', 'phone', 'status', 'balance']);

        return DataTables::of($users)
            ->addColumn('action', function ($user) {
                $url = route('admin.users.edit', $user);
                return '<a class="btn btn-sm btn-primary" href="' . $url . '">Edit</a>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function edit(User $user)
    {
        $user->load('deposits');

        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $data = $request->validate([
            'balance' => ['required', 'numeric'],
        ]);

        $user->update($data);

        return redirect()->route('admin.users.index')->with('status', 'User updated.');
    }
}
