<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function create() {
        return Socialite::driver("google")->redirect();
    }

    public function callback() {
        try {
            $google_user = Socialite::driver("google")->user();
            $user = User::where('email', $google_user->email)->first();
            if ($user) {
                if (!$user->email_verified_at) {
                    $user->update([
                        'email_verified_at' => now(),
                    ]);
                }
                
                Auth::login($user);
                return redirect()->intended('dashboard');
            } else {
                $new_user = User::Create([
                    'email' => $google_user->email,
                    'name' => ucwords(strtolower($google_user->name)),
                    'email_verified_at' => now(),
                    'password' => encrypt('my-google'),
                    'remember_token' => Str::random(10),
                ]);
                
                Auth::login($new_user);
                return redirect()->intended('dashboard');
            }
        } catch (\Throwable $th) {
            return redirect()->route('login')->with("error", "Login failed try again");
        }
    }
}
