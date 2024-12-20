<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataComplete
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (
            Auth::user()->name != "" && 
            Auth::user()->email != "" && 
            Auth::user()->phone_number == "" && 
            Auth::user()->line == "" &&
            Auth::user()->institution == "" &&
            Auth::user()->gender == "" &&
            Auth::user()->birth_date == ""
        ) {
            return redirect()->intended('dashboard')->with("error", "Complete Your Data First");
        }

        return $next($request);
    }
}
