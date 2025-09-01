<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function index()
    {
        return view('user.deposit-index');
    }

    public function create()
    {
        return view('user.deposit');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'amount' => ['required', 'numeric', 'min:1'],
            'currency' => ['required', 'string', 'in:USD,CRYPTO'],
            'address' => ['required', 'string'],
        ]);

        $request->user()->deposits()->create($data);

        return redirect()->route('deposit.history')->with('status', 'Deposit request submitted.');
    }

    public function history(Request $request)
    {
        $deposits = $request->user()->deposits()->latest()->get();
        return view('user.deposit-history', compact('deposits'));
    }
}
