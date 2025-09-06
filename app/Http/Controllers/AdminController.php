<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Deposit;
use App\Models\Purchase;
use Illuminate\View\View;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    public function login(): View
    {
        return view('admin.login');
    }

    public function dashboard(): View
    {
        $todayDeposit = Deposit::where('status', 'completed')
            ->whereDate('created_at', Carbon::today())
            ->sum('amount');

        $monthDeposit = Deposit::where('status', 'completed')
            ->whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->sum('amount');

        $todayPurchase = Purchase::whereDate('created_at', Carbon::today())->sum('price');

        $monthPurchase = Purchase::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->sum('price');

        return view('admin.dashboard', compact(
            'todayDeposit',
            'monthDeposit',
            'todayPurchase',
            'monthPurchase'
        ));
    }

    public function profile(): View
    {
        $data['admin']= Admin::get()->all();
        return view('admin.profile',$data);
    }
}
