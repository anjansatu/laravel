<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        return view('user.profile.details', ['user' => $request->user()]);
    }

    public function edit(Request $request)
    {
        return view('user.profile.edit', ['user' => $request->user()]);
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'avatar' => ['nullable', 'image'],
        ]);

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $data['avatar'] = $path;
        }

        $request->user()->update($data);

        return redirect()->route('profile.details')->with('status', 'Profile updated successfully.');
    }

    public function password()
    {
        return view('user.profile.password');
    }

    public function updatePassword(Request $request)
    {
        $data = $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $request->user()->update([
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('profile.password.edit')->with('status', 'Password updated successfully.');
    }

    public function purchasesMail(Request $request)
    {
        $purchases = $request->user()->purchases()->where('type', 'mail')->latest()->get();

        return view('user.purchases-mail', compact('purchases'));
    }

    public function purchasesSsn(Request $request)
    {
        $purchases = $request->user()->purchases()->where('type', 'ssn')->latest()->get();

        return view('user.purchases-ssn', compact('purchases'));
    }

    public function purchasesBank(Request $request)
    {
        $purchases = $request->user()->purchases()->where('type', 'bank')->latest()->get();

        return view('user.purchases-bank', compact('purchases'));
    }
}
