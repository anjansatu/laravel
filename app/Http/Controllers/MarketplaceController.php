<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gmail;
use App\Models\Ssn;
use App\Models\Bank;

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

    public function bank()
    {
        $banks = Bank::all();
        return view('user.bank', compact('banks'));
    }

    public function purchaseBank(Request $request)
    {
        $data = $request->validate([
            'bank_id' => ['required', 'exists:banks,id'],
        ]);

        $bank = Bank::findOrFail($data['bank_id']);
        $user = $request->user();

        if ($user->balance < $bank->price) {
            return back()->withErrors('Insufficient balance.');
        }

        $user->decrement('balance', $bank->price);

        $user->purchases()->create([
            'type' => 'bank',
            'item' => $bank->account_number,
            'price' => $bank->price,
        ]);

        $bank->delete();

        return back()->with('status', 'Bank purchased successfully.');
    }
}
