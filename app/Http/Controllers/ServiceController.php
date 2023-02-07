<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function servicelist(Request $request){
        if($request -> method() == "GET"){
            $service = \App\Models\Service::get();            
            return view("admin.service_list", ['data' => $service]);
        }
    }

    public function serviceadd(Request $request){
        if($request -> method() == "POST"){
            
        }else{
            return view("admin.service_add");
        }
    }

    public function serviceupdate(Request $request){
        if($request -> method() == "POST"){
            
        }else{
            return view("admin.service_update");
        }
    }

    public function servicedelete(Request $request){
        if($request -> method() == "GET"){
            return view("admin.service_list");
        }
    }
}
