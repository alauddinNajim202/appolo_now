<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
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
        return view('auth.sign-in');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {

        $user = User::where('email', '=', $request->email)->first();


        if ($user && $request->role == $user->role) {
            Auth::login($user);


            if ($user->role === 'artist') {
                return redirect()->route('artist.dashboard');
            } elseif ($user->role === 'listener') {
                return redirect()->route('listener.dashboard');
            }
        }


        return redirect()->back()->withErrors([
            'email' => 'The provided credentials or role do not match our records.',
        ])->withInput($request->only('email', 'role'));
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
