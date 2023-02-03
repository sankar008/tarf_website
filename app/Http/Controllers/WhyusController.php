<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhyusController extends Controller
{
    public function getwhychooseus(Request $request){
        return view("admin.whyus_list", ['data' => []]);
    }

    public function updatewhychooseus(Request $request){

    }
}
