<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\GmailImport;
use App\Models\Gmail;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class GmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gmails = Gmail::all();
        return view('admin.gmails.index', compact('gmails'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'unique:gmails,email'],
            'price' => ['required', 'numeric'],
        ]);

        Gmail::create($data);

        return back()->with('status', 'Gmail added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gmail $gmail)
    {
        return view('admin.gmails.edit', compact('gmail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gmail $gmail)
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'unique:gmails,email,' . $gmail->id],
            'price' => ['required', 'numeric'],
        ]);

        $gmail->update($data);

        return redirect()->route('admin.gmails.index')->with('status', 'Gmail updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gmail $gmail)
    {
        $gmail->delete();
        return back()->with('status', 'Gmail deleted.');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => ['required', 'file', 'mimes:xlsx,csv'],
        ]);

        Excel::import(new GmailImport, $request->file('file'));

        return back()->with('status', 'Gmails imported successfully.');
    }
}
