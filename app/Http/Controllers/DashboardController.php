<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Seminar;
use App\Models\Tiket;
use App\Models\UIUXDesign;
use App\Models\Photography;
use App\Models\BusinessPlan;
use App\Models\EduVideo;
use App\Models\DesignPoster;
use App\Models\EssayCompe;
use App\Models\ValorantSolo;
use App\Models\ValorantTeam;
use Illuminate\Http\Request;
use App\Models\MobileLegends;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

        $Photography = Photography::where('email', Auth::user()->email)->first();
        $BusinessPlan = BusinessPlan::where('email', Auth::user()->email)->first();
        $EduVideo = EduVideo::where('email', Auth::user()->email)->first();
        $DesignPoster = DesignPoster::where('email', Auth::user()->email)->first();
        $EssayCompe = EssayCompe::where('email', Auth::user()->email)->first();
        $UIUXDesign = UIUXDesign::where('email', Auth::user()->email)->first();
        $ValorantSolo = ValorantSolo::where('email', Auth::user()->email)->first();
        $ValorantTeam = ValorantTeam::where('email', Auth::user()->email)->first();
        $MobileLegends = MobileLegends::where('email', Auth::user()->email)->first();
        $Seminar = Seminar::where('email', Auth::user()->email)->first();
        $Tiket = Tiket::where('email', Auth::user()->email)->first();

        $data = [
            "title" => "Dashboard | SI FEST",
            "nav" => [
                "active" => 'Dashboard',
            ],
            "assets" => 'Dashboard',
            "competitions" => [
                "Photography" => $Photography,
                "BusinessPlan" => $BusinessPlan,
                "EduVideo" => $EduVideo,
                "DesignPoster" => $DesignPoster,
                "EssayCompe" => $EssayCompe,
                "UIUXDesign" => $UIUXDesign,
                "ValorantSolo" => $ValorantSolo,
                "ValorantTeam" => $ValorantTeam,
                "MobileLegends" => $MobileLegends,
            ],
            "Seminar" => $Seminar,
            "Tiket" => $Tiket,
        ];

        return view("web/dashboard/dashboard", $data);
    }

    public function store(Request $request) {

        $email = $request->email;
        $user = User::where('email', $email)->first();

        if ($user) {
            $validation = $request->validate([
                "name" => "required", "string", "max:255",
                "email" => "required", "string", "email:dns", "max:255", "unique:users",
                "phone_number" => "required", "numeric", "min:11",
                "line" => "required",
                "institution" => "required",
                "gender" => "required",
                "birth_date" => "required"
            ]);

            $user->update(
                $validation, [
                "institution" => ucwords(strtolower($request->institution)),
            ]);
            $request->session()->regenerate();
            return back()->with("success", "Data Edited");
        }

        return back()->with("error", "Failed to edit data");
    }
}
