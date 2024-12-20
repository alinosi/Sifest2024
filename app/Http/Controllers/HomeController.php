<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $data = [
            "title" => "Home | SI FEST",
            "nav" => [
                "active" => 'Home', 
            ],
            "assets" => "Home",
        ];

        return view("web/home/home", $data);
    }
}
