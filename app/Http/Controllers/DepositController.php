<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function create()
    {
        return view('user.deposit');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'amount' => ['required', 'numeric', 'min:1'],
            'currency' => ['required', 'string', 'in:USD,CRYPTO'],
        ]);

        $request->user()->deposits()->create($data);

        return redirect()->route('dashboard')->with('status', 'Deposit request submitted.');
    }
}
