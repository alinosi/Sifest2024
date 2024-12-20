<?php

namespace App\Http\Controllers;

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
use App\Models\ListCompetition;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CompetitionController extends Controller
{
    public function index() {

        $data = [
            "title" => "Competition | SI FEST",
            "nav" => [
                "active" => 'Competition', 
            ],
            "assets" => "Competition",
        ];

        return view("web/competition/competition", $data);
    }
    
    public function self_page(Request $request) {

        $query_competition = $request->competition;
        
        $competition = ListCompetition::where('competition', $query_competition)->first();

        if ($competition) {

            $data = [
                "title" => $competition['competition'] . " Competition | SI FEST",
                "nav" => [
                    "active" => 'Competition', 
                ],
                "competition" => $competition,  
                "assets" => "Competition",
            ];

            if ($competition['competition'] == "Valorant") {
                $count_solo = ValorantSolo::all()->count();
                $count_team = ValorantTeam::all()->count();

                if ($count_solo % 5 !== 0) {
                    $count_user = $count_team + floor($count_solo / 5);
                    $count_user++;
                } else {
                    $count_user = $count_team + ($count_solo / 5);
                }

                $slot_solo = ($competition['limit'] * 5) - ($count_team * 5) - $count_solo;
                $slot_team = $competition['limit'] - $count_user;

                $data['slot']['solo'] = $slot_solo;
                $data['slot']['team'] = $slot_team; 
            } else {
                $count = app("App\Models\\".$competition['competition'])::all()->count();
                $slot = $competition['limit'] - $count;
                $data['slot'] = $slot;
            }

            return view("web/competition/selfpage", $data);
        }
        
        return abort(404);
    }
}
