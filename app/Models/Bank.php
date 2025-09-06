<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'city',
        'state',
        'dob',
        'account_number',
        'password',
        'bank_name',
        'ssn',
        'price',
    ];
}

