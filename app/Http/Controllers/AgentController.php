<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    
    public function list(Request $request){
        if($request -> method() == "POST"){

        }else{
            return view("admin.agent_list", ['data' => \App\Models\User::select(['name', 'email', 'mobile_no', 'is_active', 'details', 'id', 'image', 'is_active']) -> get()]);
        }
    }

    public function add(Request $request){
        if($request -> method() == "POST"){
            $request -> validate([
                'name' => 'required|max:250',
                'email' => 'required|email|unique:users,email',
                'mobile_no' => 'required|numeric',
                'image' => 'required|mimes:jpeg,jpg,png|max:10000'
            ]);


            if($request -> hasFile('image') != ''){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $path = "uploads/";
                $file->move($path, $path.time().'.'.$file->getClientOriginalExtension());
                $image = $path.time().'.'.$file->getClientOriginalExtension();
            }else{
                $image = "";
            }
          
            $agent = new \App\Models\User([
                'name' => $request -> input('name'),
                'email' => $request -> input('email'),
                'mobile_no' => $request -> input('mobile_no'),
                'image' => $image,
                'details' => $request -> input('details'),
                'is_active' => "1"
            ]);

            $agent -> save();
            return redirect() -> route('agent.list')->with('successmsg', "Data has been added successfully.");
        }else{
            return view("admin.agent_add", ['data' => []]);
 
        }
    }

    public function update(Request $request, $id = ''){
        if($request -> method() == "POST"){
            $request -> validate([
                'name' => 'required|max:250',
                'email' => 'required|email|unique:users,email,'.$request -> input('update_id'),
                'mobile_no' => 'required|numeric',
                'image' => 'mimes:jpeg,jpg,png|max:10000'
            ]);

            if($request -> hasFile('image') != ''){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $path = "uploads/";
                $file->move($path, $path.time().'.'.$file->getClientOriginalExtension());
                $image = $path.time().'.'.$file->getClientOriginalExtension();
                $data = [
                    'name' => $request -> input('name'),
                    'email' => $request -> input('email'),
                    'mobile_no' => $request -> input('mobile_no'),
                    'details' => $request -> input('details'),
                    'is_active' => $request -> input('is_active'),
                    'image' => $image
                ];
            }else{
                $image = "";
                $data = [
                    'name' => $request -> input('name'),
                    'email' => $request -> input('email'),
                    'mobile_no' => $request -> input('mobile_no'),
                    'is_active' => $request -> input('is_active'),
                    'details' => $request -> input('details'),
                ];
            }

            $agent = \App\Models\User::find($request -> input('update_id'));
            $agent -> fill($data);
            $agent -> save();
            return redirect() -> route('agent.list')->with('successmsg', "Data has been updated successfully.");
        }else{
         return view('admin.agent_update', ['data' => \App\Models\User::find($id)]);   
        }
    }

    public function delete(Request $request, $id){
       $agent = \App\Models\User::find($id);
       if($agent){
        $agent -> delete();
        return redirect() -> route('agent.list')->with('successmsg', "Data has been deleted successfully.");
       }else{
        return redirect() -> route('agent.list')->with('errmsg', "Data not found.");
       }
    }

}
