<?php

namespace App\Http\Controllers;

use App\Models\Photography;
use Illuminate\Http\Request;
use App\Models\ListCompetition;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PhotographyController extends Controller
{
    public function create() {

        $user = Photography::where('email', Auth::user()->email)->first();
        $count_user = Photography::all()->count();
        $competition = ListCompetition::where('competition', 'photography')->first();

        if($count_user >= $competition['limit']) {
            return back()->with("error", "Sorry, we were out of slot");
        }

        if ($user) {
            return back()->with("error", "You have registered for the Photography competition");
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

    public function registration (Request $request) {

        $validation = $request->validate([
            "name" => "required", "string",
            "email" => "required", "string", "email:dns", "unique:users",
            "phone_number" => "required", "numeric", "min:11", "max:15",
            "line" => "required", "string",
            "institution" => "required", "string",
            "idcard" => "required", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048",
            "payment" => "required", "image", "mimes:jpeg,png,jpg,gif,svg", "max:2048",
        ]);

        if($request->file('idcard') && $request->file('payment')){
            $idcard = $request->file('idcard');
            $fileidcard = date('YmdHi').".".$idcard->getClientOriginalName();
            $idcard->move(public_path('idcard'), $fileidcard);
            $validation['idcard'] = $fileidcard;

            $payment = $request->file('payment');
            $filepayment = date('YmdHi').".".$payment->getClientOriginalName();
            $payment->move(public_path('payment'), $filepayment);
            $validation['payment'] = $filepayment;

            $validation['name'] = ucwords(strtolower($request->name));

            $photography = new Photography($validation);

            $photography->save();

            return redirect()->intended('dashboard')->with("success", "Registration is successful, wait for verification from admin");
        }

        return back()->with("error", "Registration failed, try again");
    }

    public function submission_create() {

        $user = Photography::where('email', Auth::user()->email)->first();
        $competition = ListCompetition::where('competition', 'Photography')->first();

        if ($user) {

            if ($user['verification'] != "Verified") {
                return redirect()->route("dashboard")->with("error", "Sorry, you are not verified. Wait until admin verifies your data");
            }

            $data = [
                "title" => $competition['competition'] . " Submission | SI FEST",
                "nav" => [
                    "active" => 'Submission',
                ],
                "competition" => $competition,
                "user" => $user,
                "assets" => "Form",
            ];

            return view("web/submission/".strtolower($competition['competition']), $data);
        }

        return redirect()->route("dashboard")->with("error", "Sorry, you are not registered");
    }

    public function submission(Request $request) {

        $validation = $request->validate([
            "submission" => 'required', 'file', 'max:10240', 'mimes:pdf',
        ]);

        $user = Photography::where('email', Auth::user()->email)->first();

        if ($user) {

            if ($request->file('submission')) {

                if ($user->submission) {
                    $old_path = public_path('Photography\\').$user->submission;
                    if(File::exists($old_path)) {
                        File::delete($old_path);
                    }
                }

                $submission = $request->submission;
                $filesubmission = $submission->getClientOriginalName();
                $submission->move(public_path('Photography'), $filesubmission);

                $user->update([
                    'submission' => $filesubmission,
                ]);

                return back()->with("success", "Submission file uploaded successfully");
            };
        }

        return back()->with("error", "Submission file failed to upload");
    }
}
