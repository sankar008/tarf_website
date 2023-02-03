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
    public function index()
    {   
        $data = \App\Models\User::where('is_active', "1")->limit(4)->get();      
        return view('home', ['data' => $data]);
    }

    public function buy()
    {    
        $data = \App\Models\Buyer::first();  
        return view('buy', ['data' => $data]);
    }

    public function sell()
    {    
        $data = \App\Models\Seller::first(); 
        return view('sell', ['data' => $data]);
    }

    public function aboutus()
    {    
        $data = \App\Models\Aboutus::first();      
        return view('aboutus', ['data' => $data]);
    }

    public function findandagent()
    {    
        return view('findandagent');
    }

    public function whyus()
    {    
        return view('whyus');
    }
}
