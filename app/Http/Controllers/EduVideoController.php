<?php

namespace App\Http\Controllers;

use App\Models\EduVideo;
use Illuminate\Http\Request;
use App\Models\ListCompetition;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EduVideoController extends Controller
{
    public function create() {

        $user = EduVideo::where('email', Auth::user()->email)->first();
        $count_user = EduVideo::all()->count();
        $competition = ListCompetition::where('competition', 'EduVideo')->first();
        
        if($count_user >= $competition['limit']) {
            return back()->with("error", "Sorry, we were out of slot");   
        }

        if ($user) {
            return back()->with("error", "You have registered for the Educational Video competition");   
        }
        
        $data = [
            "title" => $competition['competition'] . " Registration | SI FEST",
            "nav" => [
                "active" => 'Registration', 
            ],
            "competition" => $competition,  
            "assets" => "Form",
        ];
        
        return view("web/registration/".strtolower($competition['competition']), $data);
        
        // if registration closed
        // return back()->with("error", "Sorry, registration closed");  
    }
    
    public function registration (Request $request) 
    
        { 
            $validation = $request->validate([
                "team_name" => "required", "string",
                "email" => "required", "string", "email:dns", "unique:users",
                
                "name1" => "required", "string",
                "phone_number1" => "required", "numeric", "min:11", "max:15",
                "line1" => "required", "string", 
                "institution1" => "required", "string", 
                "idcard1" => "required", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048",
                
                "name2" => "nullable", "string",
                "phone_number2" => "nullable", "numeric", "min:11", "max:15",
                "line2" => "nullable", "string", 
                "institution2" => "nullable", "string", 
                "idcard2" => "nullable", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048",

                "name3" => "nullable", "string",
                "phone_number3" => "nullable", "numeric", "min:11", "max:15",
                "line3" => "nullable", "string",
                "institution3" => "nullable", "string",
                "idcard3" => "nullable", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048",
            
                "payment" => "required", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048",
            ]);
            
        
        if($request->file('idcard2')) {
            
            $idcard2 = $request->file('idcard2');
            $fileidcard2 = date('YmdHi').".".$idcard2->getClientOriginalName();
            $idcard2->move(public_path('idcard'), $fileidcard2);
            $validation['idcard2'] = $fileidcard2;
            
            $validation['name2'] = ucwords(strtolower($request->name2));
            
        }
            
        if($request->file('idcard3')) {
            
            $idcard3 = $request->file('idcard3');
            $fileidcard3 = date('YmdHi').".".$idcard3->getClientOriginalName();
            $idcard3->move(public_path('idcard'), $fileidcard3);
            $validation['idcard3'] = $fileidcard3;
            
            $validation['name3'] = ucwords(strtolower($request->name3));
            
        }
        
        if(
            $request->file('idcard1') && $request->file('payment')
        ){
            $idcard1 = $request->file('idcard1');
            $fileidcard1 = date('YmdHi').".".$idcard1->getClientOriginalName();
            $idcard1->move(public_path('idcard'), $fileidcard1);
            $validation['idcard1'] = $fileidcard1;

            $payment = $request->file('payment');
            $filepayment = date('YmdHi').".".$payment->getClientOriginalName();
            $payment->move(public_path('payment'), $filepayment);
            $validation['payment'] = $filepayment;
            
            $validation['name1'] = ucwords(strtolower($request->name1));
            

            $EduVideo = new EduVideo($validation);

            $EduVideo->save();

            return redirect()->intended('dashboard')->with("success", "Registration is successful, wait for verification from admin");
        }

        return back()->with("error", "Registration failed, try again");
    }
    
    public function submission_create() {

        // $user = EduVideo::where('email', Auth::user()->email)->first();
        // $competition = ListCompetition::where('competition', 'EduVideo')->first();

        // if ($user) {

        //     if ($user['verification'] != "Verified") {
        //         return redirect()->route("dashboard")->with("error", "Sorry, you are not verified. Wait until admin verifies your data");
        //     }

        //     $data = [
        //         "title" => $competition['competition'] . " Submission | SI FEST",
        //         "nav" => [
        //             "active" => 'Submission', 
        //         ],
        //         "competition" => $competition,  
        //         "user" => $user,
        //         "assets" => "Form",
        //     ];
            
        //     return view("web/submission/".strtolower($competition['competition']), $data);
        // }
        
        return redirect()->route("dashboard")->with("error", "Sorry, you are not registered");
    }
    
    public function submission(Request $request) {

        $validation = $request->validate([
            "submission" => 'required', 'file', 'max:10240', 'mimes:pdf',
        ]);

        $user = EduVideo::where('email', Auth::user()->email)->first();

        if ($user) {
            
            if ($request->file('submission')) {

                if ($user->submission) {
                    $old_path = public_path('EduVideo\\').$user->submission;
                    if(File::exists($old_path)) {
                        File::delete($old_path);
                    }
                }

                $submission = $request->submission;
                $filesubmission = $submission->getClientOriginalName();
                $submission->move(public_path('EduVideo'), $filesubmission);

                $user->update([
                    'submission' => $filesubmission,
                ]);

                return back()->with("success", "Submission file uploaded successfully");
            };
        }

        return back()->with("error", "Submission file failed to upload");
    }
}
