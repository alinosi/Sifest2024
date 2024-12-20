<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
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
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function create(Request $request) {

        $session = Auth("admin")->user()->session;

        if ($request->type) {
            $session = $session.ucwords($request->type);
        }


        Session::put('session', $session);

        $users =  app("App\Models\\".$session)::all();

        $data = [
            "title" => "Admin | SI FEST",
            "nav" => [
                "active" => $session,
            ],
            "assets" => "Auth",
            "users" => $users,
        ];

        return view("admin/dashboard/".strtolower($session) , $data);
    }

    public function marketing(Request $request) {

        $session = Auth("admin")->user()->session;

        if ($request->type) {
            $session = $session.ucwords($request->type);
        }

        Session::put('session', $session);

        $Photography = Photography::all()->count();
        $BusinessPlan = BusinessPlan::all()->count();
        $EduVideo = EduVideo::all()->count();
        $DesignPoster = DesignPoster::all()->count();
        $EssayCompe = EssayCompe::all()->count();
        $UIUXDesign = UIUXDesign::all()->count();
        $ValorantTeam = ValorantTeam::all()->count();
        $ValorantSolo = ValorantSolo::all()->count();
        $MobileLegends = MobileLegends::all()->count();
        $Seminar = Seminar::all()->count();
        $Tiket = Tiket::all()->count();

        $data = [
            "title" => "Admin | SI FEST",
            "nav" => [
                "active" => $session,
            ],
            "assets" => "Auth",
            "participant" => [
                "Photography" => $Photography,
                "BusinessPlan" => $BusinessPlan,
                "EduVideo" => $EduVideo,
                "DesignPoster" => $DesignPoster,
                "EssayCompe" => $EssayCompe,
                "UIUXDesign" => $UIUXDesign,
                "ValorantTeam" => $ValorantTeam,
                "ValorantSolo" => $ValorantSolo,
                "MobileLegends" => $MobileLegends,
                "Seminar" => $Seminar,
                "Tiket" => $Tiket,
            ],
        ];

        return view("admin/dashboard/".strtolower($session) , $data);
    }

    public function get_dataById($id) {

        $session = Session::get('session');

        $user = app("App\Models\\".$session)::find($id);

        return response()->json([
            "status"=>200,
            "user"=>$user,
        ]);
    }

    public function verification(Request $request) {

        $email = $request->email;
        $session = Session::get('session');
        $user = app("App\Models\\".$session)::where('email', $email)->first();

        if ($user) {
            $user->update([
                'verification' => "Verified",
            ]);

            $request->session()->regenerate();
            return back()->with("success", "Participant Verified");
        }

        return back()->with("error", "Failed to verify participant");
    }

    public function delete(Request $request) {

        $email = $request->email;
        $session = Session::get('session');
        $user = app("App\Models\\".$session)::where('email', $email)->first();

        if ($user) {
            // delete data user
            $user->delete();

            // also delete img from user data
            $fileidcard = public_path('idcard\\').$user->idcard;
            if(File::exists($fileidcard)) {
                File::delete($fileidcard);
            }
            $fileidcard1 = public_path('idcard\\').$user->idcard1;
            if(File::exists($fileidcard1)) {
                File::delete($fileidcard1);
            }
            $fileidcard2 = public_path('idcard\\').$user->idcard2;
            if(File::exists($fileidcard2)) {
                File::delete($fileidcard2);
            }
            $fileidcard3 = public_path('idcard\\').$user->idcard3;
            if(File::exists($fileidcard3)) {
                File::delete($fileidcard3);
            }
            $fileidcard4 = public_path('idcard\\').$user->idcard4;
            if(File::exists($fileidcard4)) {
                File::delete($fileidcard4);
            }
            $fileidcard5 = public_path('idcard\\').$user->idcard5;
            if(File::exists($fileidcard5)) {
                File::delete($fileidcard5);
            }

            $filesubmission = public_path($session.'\\').$user->submission;
            if(File::exists($filesubmission)) {
                File::delete($filesubmission);
            }

            $request->session()->regenerate();
            return back()->with("success", "Data deleted");
        }

        return back()->with("error", "Failed to delete data");
    }
}
