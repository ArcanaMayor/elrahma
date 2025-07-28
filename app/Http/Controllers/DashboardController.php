<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalVisitors = DB::table('visitors')->count();

        $todayVisitors = DB::table('visitors')
            ->whereDate('visited_at', Carbon::today())
            ->count();

        $monthlyVisitors = DB::table('visitors')
            ->whereYear('visited_at', Carbon::now()->year)
            ->whereMonth('visited_at', Carbon::now()->month)
            ->count();

        return view('admin.dashboard', compact('totalVisitors', 'todayVisitors', 'monthlyVisitors'));
    }
}
