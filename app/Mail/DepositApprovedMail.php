<?php

namespace App\Mail;

use App\Models\Deposit;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DepositApprovedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $deposit;

    public function __construct(Deposit $deposit)
    {
        $this->deposit = $deposit;
    }

    public function build()
    {
        return $this->subject('Deposit Approved')
            ->view('emails.deposit-approved');
    }
}

