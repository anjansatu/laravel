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
            'mail_id' => ['required', 'exists:gmails,id'],
        ]);

        $mail = Gmail::findOrFail($data['mail_id']);
        $user = $request->user();

        if ($user->balance < $mail->price) {
            return back()->withErrors('Insufficient balance.');
        }

        $user->decrement('balance', $mail->price);

        $user->purchases()->create([
            'type' => 'mail',
            'item' => $mail->email,
            'price' => $mail->price,
        ]);

        $mail->delete();

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
            'ssn_id' => ['required', 'exists:ssns,id'],
        ]);

        $ssn = Ssn::findOrFail($data['ssn_id']);
        $user = $request->user();

        if ($user->balance < $ssn->price) {
            return back()->withErrors('Insufficient balance.');
        }

        $user->decrement('balance', $ssn->price);

        $user->purchases()->create([
            'type' => 'ssn',
            'item' => $ssn->ssn,
            'price' => $ssn->price,
        ]);

        $ssn->delete();

        return back()->with('status', 'SSN purchased successfully.');
    }
}
