<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {

            //Kijk naar de role van de user en redirect naar de juiste pagina

            if ($request->user()->role == 'student') {
                return redirect()->intended(RouteServiceProvider::STUDENT.'?verified=1');
            } elseif ($request->user()->role == 'bedrijf') {
                return redirect()->intended(RouteServiceProvider::BEDRIJF.'?verified=1');
            } elseif ($request->user()->role == 'employee') {
                return redirect()->intended(RouteServiceProvider::EMPLOYEE.'?verified=1');
            } elseif ($request->user()->role == 'admin') {
                return redirect()->intended(RouteServiceProvider::ADMIN.'?verified=1');
            }
            //return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        //Kijk naar de role van de user en redirect naar de juiste pagina

        if ($request->user()->role == 'student') {
            return redirect()->intended(RouteServiceProvider::STUDENT.'?verified=1');
        } elseif ($request->user()->role == 'bedrijf') {
            return redirect()->intended(RouteServiceProvider::BEDRIJF.'?verified=1');
        } elseif ($request->user()->role == 'employee') {
            return redirect()->intended(RouteServiceProvider::EMPLOYEE.'?verified=1');
        } elseif ($request->user()->role == 'admin') {
            return redirect()->intended(RouteServiceProvider::ADMIN.'?verified=1');
        }

        //return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
    }
}
