<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationSuccessMail;

class AuthController extends Controller
{
    /**
     * Show the registration form.
     */
    public function showRegister()
    {
        return view('auth.register');
    }

    /**
     * Handle registration request.
     */
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        Mail::to($user->email)->send(new RegistrationSuccessMail());

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('dashboard');
    }

    /**
     * Show the login form.
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Handle an authentication attempt.
     */
    public function login(LoginRequest $request)
    {
        $login = $request->input('login');
        $field = $this->detectField($login);

        $user = User::where($field, $login)->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {
            Auth::login($user, $request->boolean('remember'));
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['login' => __('These credentials do not match our records.')])->withInput();
    }

    /**
     * Logout the user.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    /**
     * Show the dashboard for authenticated users.
     */
    public function dashboard()
    {
        return view('user.dashboard');
    }

    /**
     * Show the admin dashboard.
     */
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Detect the login field type.
     */
    protected function detectField(string $value): string
    {
        if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return 'email';
        }

        if (preg_match('/^\+?[0-9]{10,15}$/', $value)) {
            return 'phone';
        }

        return 'username';
    }
}
