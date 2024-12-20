<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BazaarController extends Controller
{
    public function index() {

        $data = [
            "title" => "Bazaar | SI FEST",
            "nav" => [
                "active" => 'Bazaar', 
            ],
            "assets" => "Bazaar"
        ];

        return view("web/bazaar/bazaar", $data);
    }
}
