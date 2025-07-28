<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LogVisitor
{
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        $today = Carbon::today();

        // Cek apakah sudah ada kunjungan dari IP yang sama hari ini
        $alreadyVisited = DB::table('visitors')
            ->where('ip', $ip)
            ->whereDate('visited_at', $today)
            ->exists();

        if (!$alreadyVisited) {
            DB::table('visitors')->insert([
                'ip' => $ip,
                'visited_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return $next($request);
    }
}