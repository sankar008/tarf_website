<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function updateHome(Request $request){
        if($request -> method() == "POST"){

            $request -> validate([                   // Validation POST data.
                'title_1' => 'required',
                'title_2' => 'required',
                'image_1' => 'mimes:jpeg,jpg,png|max:10000',
                'image_2' => 'mimes:jpeg,jpg,png|max:10000',
            ]);
            // Create array for insert query.
            $data = [
                'title_1' => $request -> input('title_1'),
                'title_2' => $request -> input('title_2'),
                'details_1' => $request -> input('details_1'),
                'details_2' => $request -> input('details_2'),
            ];

            // Validation image 1
            if($request -> hasFile('image_1')){
                $file = $request->file('image_1');
                $name = $file->getClientOriginalName();
                $path = "uploads/";
                $file->move($path, $path.time().'.'.$file->getClientOriginalExtension());
                $image1 = $path.time().'.'.$file->getClientOriginalExtension();
                $data['image_1'] = $image1;
            }
            // Validation image 2
            if($request -> hasFile('image_2')){
                $file = $request->file('image_2');
                $name = $file->getClientOriginalName();
                $path = "uploads/";
                $file->move($path, $path.time().'.'.$file->getClientOriginalExtension());
                $image2 = $path.time().'.'.$file->getClientOriginalExtension();
                $data['image_2'] = $image2;
            }

            $aboutus = \App\Models\Home::first();    // Get First data.
            $aboutus -> fill($data);
            $aboutus -> save();                 // Update old data.
            return redirect() -> route('home.update')->with('success', "Data has been updated successfully!");  // Redirect to success url
        }else{
            return view("admin.home", ['data' => \App\Models\Home::first()]);
        }
    }
}
