<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index()
    {
        $banks = Bank::all();
        return view('admin.banks.index', compact('banks'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'dob' => ['required', 'date'],
            'account_number' => ['required', 'string'],
            'password' => ['required', 'string'],
            'bank_name' => ['required', 'string'],
            'ssn' => ['required', 'string'],
            'price' => ['required', 'numeric'],
        ]);

        Bank::create($data);

        return back()->with('status', 'Bank added successfully.');
    }

    public function edit(Bank $bank)
    {
        return view('admin.banks.edit', compact('bank'));
    }

    public function update(Request $request, Bank $bank)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'dob' => ['required', 'date'],
            'account_number' => ['required', 'string'],
            'password' => ['required', 'string'],
            'bank_name' => ['required', 'string'],
            'ssn' => ['required', 'string'],
            'price' => ['required', 'numeric'],
        ]);

        $bank->update($data);

        return redirect()->route('admin.banks.index')->with('status', 'Bank updated successfully.');
    }

    public function destroy(Bank $bank)
    {
        $bank->delete();
        return back()->with('status', 'Bank deleted.');
    }
}

