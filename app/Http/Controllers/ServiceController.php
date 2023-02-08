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
            $request -> validate([
                'title' => 'required|max:255',
                'image' => 'required|mimes:jpeg,jpg,png|max:10000'
            ]);

            if($request -> hasFile('image')){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $path = "uploads/";
                $file->move($path, $path.time().'.'.$file->getClientOriginalExtension());
                $image2 = $path.time().'.'.$file->getClientOriginalExtension();
                $data['image'] = $image2;
            }

            $service = new \App\Models\Service([
                'title' => $request -> input('title'),
                'details' => $request -> input('details'),
                'image' => $data['image']
            ]);

            $service -> save();
            return redirect() -> route('service.list')->with('message', 'Data has been added successfully.');
        }else{
            return view("admin.service_add");
        }
    }

    public function serviceupdate(Request $request, $id = ''){
        if($request -> method() == "POST"){
            $request -> validate([
                'title' => 'required|max:255',
                'image' => $request -> hasFile('image')?'mimes:jpeg,jpg,png|max:10000':'',

            ]);


            if($request -> hasFile('image')){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $path = "uploads/";
                $file->move($path, $path.time().'.'.$file->getClientOriginalExtension());
                $image2 = $path.time().'.'.$file->getClientOriginalExtension();
                $data['image'] = $image2;
                $data['title'] = $request -> input('title');
                $data['details'] = $request -> input('details');  
            }else{
                $data['title'] = $request -> input('title');
                $data['details'] = $request -> input('details');  
            }


            $service = \App\Models\Service::find($request -> input('update_id'));
            $service -> fill($data);

            $service -> save();
            return redirect() -> route('service.list')->with('message', 'Data has been updated successfully.');

        }else{
            $serviceData = \App\Models\Service::find($id);
            return view("admin.service_update", ['data' => $serviceData]);
        }
    }

    public function servicedelete(Request $request, $id){
        if($request -> method() == "GET"){
           $service = \App\Models\Service::find($id);
            if($service){
                $service -> delete();
                return redirect() -> route('service.list')->with('message', 'Data has been deleted successfully.'); 
            }else{
                return redirect() -> route('service.list')->with('message', 'Error!! Data not found.');
            }
        }
    }
}
