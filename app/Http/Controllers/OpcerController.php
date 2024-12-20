<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpcerController extends Controller
{
    public function index() {

        $data = [
            "title" => "Opening Ceremony | SI FEST",
            "nav" => [
                "active" => '', 
            ],
            "assets" => "Opcer"
        ];

        return view("web/opcer/opcer", $data);
    }
}
