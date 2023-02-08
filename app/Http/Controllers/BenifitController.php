<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BenifitController extends Controller
{
    public function benifitlist(Request $request){
        if($request -> method() == "GET"){
            $service = \App\Models\Benifit::get();    
            return view("admin.benefit_list", ['data' => $service]);
        }
    }

    public function benifitadd(Request $request){
        if($request -> method() == "POST"){
            $request -> validate([
                'title' => 'required|max:255',
            ]);

            $service = new \App\Models\Benifit([
                'title' => $request -> input('title'),
                'details' => $request -> input('details')
            ]);

            $service -> save();
            return redirect() -> route('benifit.list')->with('successmsg', 'Data has been added successfully.');
        }else{
            return view("admin.benefit_add");
        }
    }

    public function benifitupdate(Request $request, $id = ''){
        if($request -> method() == "POST"){
            $request -> validate([
                'title' => 'required|max:255',
            ]);

            $data['title'] = $request -> input('title');
            $data['details'] = $request -> input('details'); 

            $service = \App\Models\Benifit::find($request -> input('update_id'));
            $service -> fill($data);

            $service -> save();
            return redirect() -> route('benifit.list')->with('successmsg', 'Data has been updated successfully.');

        }else{
            $serviceData = \App\Models\Benifit::find($id);
            return view("admin.benefit_update", ['data' => $serviceData]);
        }
    }

    public function benifitdelete(Request $request, $id){
        if($request -> method() == "GET"){
           $service = \App\Models\Benifit::find($id);
            if($service){
                $service -> delete();
                return redirect() -> route('benifit.list')->with('successmsg', 'Data has been deleted successfully.'); 
            }else{
                return redirect() -> route('benifit.list')->with('errmsg', 'Error!! Data not found.');
            }
        }
    }
}