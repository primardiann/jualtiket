<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;

class Authenticate 
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
            // return redirect('/detail_pembayaran'); // Ganti '/home' dengan halaman setelah login
        }

    }
}
