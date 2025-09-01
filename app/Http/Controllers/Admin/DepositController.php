<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\RedirectResponse;

class DepositController extends Controller
{
    public function pending()
    {
        $deposits = Deposit::with('user')->where('status', 'pending')->latest()->get();
        return view('admin.deposits.pending', compact('deposits'));
    }

    public function completed()
    {
        $deposits = Deposit::with('user')->where('status', 'completed')->latest()->get();
        return view('admin.deposits.completed', compact('deposits'));
    }

    public function rejected()
    {
        $deposits = Deposit::with('user')->where('status', 'rejected')->latest()->get();
        return view('admin.deposits.rejected', compact('deposits'));
    }

    public function approve(Deposit $deposit): RedirectResponse
    {
        $deposit->update(['status' => 'completed']);
        $deposit->user->increment('balance', $deposit->amount);

        return back()->with('status', 'Deposit approved.');
    }

    public function reject(Deposit $deposit): RedirectResponse
    {
        $deposit->update(['status' => 'rejected']);
        return back()->with('status', 'Deposit rejected.');
    }
}
