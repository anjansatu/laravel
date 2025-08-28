<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'g-recaptcha-response' => 'required',
        ]);

        if (! $this->validateRecaptcha($request->input('g-recaptcha-response'))) {
            return back()->withErrors(['g-recaptcha-response' => 'Captcha verification failed']);
        }

        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function showForgotForm()
    {
        return view('admin.forgot-password');
    }

    public function sendOtp(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $admin = Admin::where('email', $request->email)->first();
        if (! $admin) {
            return back()->withErrors(['email' => 'Email not found.']);
        }

        $otp = (string) rand(100000, 999999);
        $admin->forceFill([
            'otp' => $otp,
            'otp_expires_at' => now()->addMinutes(10),
        ])->save();

        Log::info('OTP for '.$admin->email.': '.$otp);
        session(['otp_email' => $admin->email]);

        return redirect()->route('admin.otp');
    }

    public function showOtpForm()
    {
        return view('admin.otp');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $admin = Admin::where('email', $request->email)->first();
        if (! $admin || $admin->otp !== $request->otp || now()->greaterThan($admin->otp_expires_at)) {
            return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
        }

        $admin->forceFill([
            'password' => Hash::make($request->password),
            'otp' => null,
            'otp_expires_at' => null,
        ])->save();

        session()->forget('otp_email');

        return redirect()->route('admin.login')->with('status', 'Password reset successful.');
    }

    protected function validateRecaptcha(string $token): bool
    {
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret_key'),
            'response' => $token,
        ]);

        return $response->json('success') ?? false;
    }
}
