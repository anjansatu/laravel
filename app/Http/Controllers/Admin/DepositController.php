<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\RedirectResponse;

class DepositController extends Controller
{
    public function index()
    {
        $deposits = Deposit::with('user')->latest()->get();

        return view('admin.deposits.index', compact('deposits'));
    }

    public function approve(Deposit $deposit): RedirectResponse
    {
        $deposit->update(['status' => 'approved']);
        $deposit->user->increment('balance', $deposit->amount);

        return back()->with('status', 'Deposit approved.');
    }
}
