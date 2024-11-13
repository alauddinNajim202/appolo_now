<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;




class GoogleController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            // dd($user);
            $finduser = User::where('email', $user->email)->first();

            if ($finduser) {

                Auth::login($finduser);
                if ($finduser->role === 'artist') {
                    return redirect()->route('artist.dashboard');
                } elseif ($finduser->role === 'listener') {
                    return redirect()->route('listener.dashboard');
                }

            } else {

                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'role' => 'listener',
                    'password' => encrypt('123456dummy')

                ]);

                Auth::login($newUser);

                return redirect()->intended('dashboard');
            }
        } catch (Exception $e) {

            dd($e->getMessage());
        }
    }
}
