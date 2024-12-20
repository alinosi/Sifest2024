<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthenticateAdminController extends Controller
{
    public function create() {

        $data = [
            "title" => "Login Admin | SI FEST",
            "nav" => [
                "active" => "Auth",
            ],
            "assets" => "Auth"
        ];

        return view("admin/login", $data);
    }
    
    public function store(Request $request) {
        
        $request->validate([
            "username" => "required",
            "password" => "required",
        ]);

        if (Auth::guard('admin')->attempt([
            "username" => $request->username, 
            "password" => $request->password,
        ])) {

            $session = Auth('admin')->user()->session;
            
            $request->session()->regenerate();

            if ($session == "Valorant") {
                return redirect()->intended('/sifest2024/admin/valorant/team')->with("success", "Semangat Panitia !!");
            }
            
            return redirect()->intended('/sifest2024/admin/'.strtolower($session))->with("success", "Semangat Panitia !!");
        }

        return back()->with("error", "Login Failed, Incorrect Username or Password");
    }
    
    public function logout(Request $request) {
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("admin.login");
    }
}
