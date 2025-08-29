<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'email', 'exists:users,email'],
            'otp' => ['required', 'digits:6'],
            'password' => ['required', 'string', 'confirmed', 'min:8', 'regex:/^(?=.*[A-Za-z])(?=.*\d).+$/'],
        ];
    }
}
