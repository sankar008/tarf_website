<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    /*
        Use for admin login.
        Check the registered Email id and password with bcrypt method.
    */
    public function login(Request $request){
       if($request -> method() == "POST"){  
        
      
        if(Auth::guard('admin')->attempt(['email' => $request -> input('email'), 'password' => $request -> input('password')])){
                       
            return redirect() -> route('admin.dashboard');
        }else{
            return redirect() -> route('admin.login');
        }
         
       }else{
        return view("admin.login");
       }
    }

    public function register(Request $request){
        if($request -> method() == "POST"){

        }else{
            return view("admin.register");
        }
    }

    // Used to show admin dashboard.
    public function dashboard(Request $request){
        if($request -> method() == "POST"){

        }else{
            return view("admin.dashboard", ['sale_gross' => 0, 'sale_net' => 0, 
                                            'upsale_gross' => 0, 'upsale_net' => 0, 'collection' => 0,
                                            'agent' => \App\Models\User::get()
                                           ]);
        }
    }
}
