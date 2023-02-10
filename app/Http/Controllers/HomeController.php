<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     /*
        Show the home page in frontend.
     */
    public function index()
    {   
        $data = \App\Models\User::where('is_active', "1")->get(); 
        $service = \App\Models\Service::limit(3) -> get();    
        $slider = \App\Models\Slider::first(); 
        $homedata = \App\Models\Home::first();
        return view('home', ['data' => $data, 'service' => $service, 'slider' => $slider, 'homedata' => $homedata]);
    }

    /*
        Show buyer section in frontend
    */
    public function buy()
    {    
        $data = \App\Models\Buyer::first();  
        return view('buy', ['data' => $data]);
    }
    /*
        Show seller section in frontend
    */
    public function sell()
    {    
        $data = \App\Models\Seller::first(); 
        return view('sell', ['data' => $data]);
    }


    /*
        Show About us section in frontend
    */
    public function aboutus()
    {    
        $data = \App\Models\Aboutus::first();      
        return view('aboutus', ['data' => $data]);
    }


    /*
        Show Find agent section in frontend
    */
    public function findandagent()
    {    
        return view('findandagent');
    }


    /*
        Show Why us section in frontend
    */
    public function whyus()
    {    
        $whyus = \App\Models\Whyus::first();
        return view('whyus', ['data' => $whyus]);
    }

    public function agent(){
        $agent = \App\Models\User::get();
        return view("agent", ['data' => $agent]);
    }
}
