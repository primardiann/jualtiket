<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)//: RedirectResponse
    {
        $request->authenticate();
        
        $request->session()->regenerate();

        if (Auth::check()) {
            $role = Auth()->user()->role;

            // dd($role);

            if ($role == 'pengguna') {
                return view('detail_pembayaran');
            } elseif ($role == 'admin') {
                return view('admin_tampilan_awal');
            } else {
                return redirect()->back();
            }
        } else {
            return view('/');
        }
    }

    /**
     * Destroy an authenticated session.
     */

    
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
