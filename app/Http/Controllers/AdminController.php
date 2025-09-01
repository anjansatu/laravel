<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function login(): View
    {
        return view('admin.login');
    }

    public function dashboard(): View
    {
        return view('admin.dashboard');
    }

    public function profile(): View
    {
        $data['admin']= Admin::get()->all();
        return view('admin.profile',$data);
    }
}
