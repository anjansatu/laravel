<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Mail\PasswordResetOtpMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PasswordResetController extends Controller
{
    /**
     * Display the form to request a password reset OTP.
     */
    public function showForgot()
    {
        return view('auth.forgot-password');
    }

    /**
     * Send an OTP to the user's email address.
     */
    public function sendOtp(ForgotPasswordRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        $otp = (string) rand(100000, 999999);
        $user->forceFill([
            'otp' => $otp,
            'otp_expires_at' => now()->addMinutes(10),
        ])->save();

        try {
            Mail::to($user->email)->send(new PasswordResetOtpMail($otp));
            Log::info('Password reset OTP for '.$user->email.': '.$otp);
        } catch (\Throwable $e) {
            Log::error('Failed to send password reset OTP: '.$e->getMessage());
            return back()->withErrors(['email' => 'Failed to send OTP. Please try again later.']);
        }

        session(['otp_email' => $user->email]);

        return redirect()->route('password.reset')->with('status', 'An OTP has been sent to your email address.');
    }

    /**
     * Show the form to reset the password using OTP.
     */
    public function showReset()
    {
        return view('auth.reset-password');
    }

    /**
     * Reset the user's password after verifying the OTP.
     */
    public function resetPassword(ResetPasswordRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (! $user || $user->otp !== $request->otp || now()->greaterThan($user->otp_expires_at)) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
        }

        $user->forceFill([
            'password' => Hash::make($request->password),
            'otp' => null,
            'otp_expires_at' => null,
        ])->save();

        session()->forget('otp_email');

        return redirect()->route('login')->with('status', 'Password reset successful.');
    }
}
