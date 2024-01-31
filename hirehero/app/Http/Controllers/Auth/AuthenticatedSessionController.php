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
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        //Kijk naar de role van de user en redirect naar de juiste pagina
        if (Auth::user()->role == 'student') {
            return redirect()->intended(RouteServiceProvider::STUDENT);
        } elseif (Auth::user()->role == 'bedrijf') {
            return redirect()->intended(RouteServiceProvider::BEDRIJF);
        } elseif (Auth::user()->role == 'employee') {
            return redirect()->intended(RouteServiceProvider::EMPLOYEE);
        }
        
        elseif (Auth::user()->role == 'admin') {
            return redirect()->intended(RouteServiceProvider::ADMIN);
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
