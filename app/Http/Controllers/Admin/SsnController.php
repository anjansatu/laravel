<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\SsnImport;
use App\Models\Ssn;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SsnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ssns = Ssn::all();
        return view('admin.ssns.index', compact('ssns'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'ssn' => ['required', 'string', 'unique:ssns,ssn'],
            'dob' => ['required', 'date'],
            'year' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
        ]);

        Ssn::create($data);

        return back()->with('status', 'SSN added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ssn $ssn)
    {
        return view('admin.ssns.edit', compact('ssn'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ssn $ssn)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'ssn' => ['required', 'string', 'unique:ssns,ssn,' . $ssn->id],
            'dob' => ['required', 'date'],
            'year' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
        ]);

        $ssn->update($data);

        return redirect()->route('admin.ssns.index')->with('status', 'SSN updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ssn $ssn)
    {
        $ssn->delete();
        return back()->with('status', 'SSN deleted.');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => ['required', 'file', 'mimes:xlsx,csv'],
        ]);

        Excel::import(new SsnImport, $request->file('file'));

        return back()->with('status', 'SSNs imported successfully.');
    }
}
