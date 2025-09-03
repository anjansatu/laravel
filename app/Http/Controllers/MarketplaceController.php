<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gmail;
use App\Models\Ssn;

class MarketplaceController extends Controller
{
    public function portalMail()
    {
        $mails = Gmail::all();
        return view('user.portal-mail', compact('mails'));
    }

    public function purchaseMail(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'price' => ['required', 'numeric'],
        ]);

        $request->user()->purchases()->create([
            'type' => 'mail',
            'item' => $data['email'],
            'price' => $data['price'],
        ]);

        return back()->with('status', 'Mail purchased successfully.');
    }

    public function ssn()
    {
        $ssns = Ssn::all();
        return view('user.ssn', compact('ssns'));
    }

    public function purchaseSsn(Request $request)
    {
        $data = $request->validate([
            'ssn' => ['required', 'string'],
            'price' => ['required', 'numeric'],
        ]);

        $request->user()->purchases()->create([
            'type' => 'ssn',
            'item' => $data['ssn'],
            'price' => $data['price'],
        ]);

        return back()->with('status', 'SSN purchased successfully.');
    }
}
