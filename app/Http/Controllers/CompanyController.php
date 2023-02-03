<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function getcompany(Request $request){
        $companyDetails = \App\Models\Company::first();
        return view("admin.company_list", ["data" => \App\Models\Company::first()]);
    }

    public function updatecompany(Request $request){
        if($request -> method() == "POST"){
            $request -> validate([
                'name' => 'required|max:255',
                'email' => 'required|email',
                'mobile_no' => 'required',
                'image' => $request -> hasFile('image')?'mimes:jpeg,jpg,png|max:10000':'',
                'address' => 'required|max:255'
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
                    'image' => $image,
                    'address' => $request -> input('address'),
                    'short_details' => $request ->input('short_details'),
                    'facebook_link' => $request -> input('facebook_link'),
                    'twitter_link' => $request -> input('twitter_link'),
                    'linkedin_link' => $request -> input('linkedin_link'),
                    'youtube_link' => $request -> input('youtube_link'),
                    'map_link' => $request -> input('map_link')
                ];
            }else{
                $image = "";
                $data = [
                    'name' => $request -> input('name'),
                    'email' => $request -> input('email'),
                    'mobile_no' => $request -> input('mobile_no'),
                    'address' => $request -> input('address'),
                    'short_details' => $request ->input('short_details'),
                    'facebook_link' => $request -> input('facebook_link'),
                    'twitter_link' => $request -> input('twitter_link'),
                    'linkedin_link' => $request -> input('linkedin_link'),
                    'youtube_link' => $request -> input('youtube_link'),
                    'map_link' => $request -> input('map_link')
                ];
            }


            $company = \App\Models\Company::first();
            $company -> fill($data);
            $company -> save();
            return redirect() -> route('company.list')->with('successmsg', "Data has been added successfully.");
        }else{
            $companyDetails = \App\Models\Company::first();
            return view("admin.update_company", ["data" => \App\Models\Company::first()]);
        }
    }
}
