<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isDokter
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userRole = session('user_role');

        if ($userRole == 2) {
            return $next($request);
        }

        return redirect()->back()->with('error', 'Akses ditolak. Anda tidak memiliki izin.');
    }
}
