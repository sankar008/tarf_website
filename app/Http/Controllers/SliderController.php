<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    
    public function updateSlider(Request $request){
        if($request -> method() == "POST"){
            
            $request -> validate([                   // Validation POST data.
                'title' => 'required',
                'details' => 'required',
                'image' => 'mimes:jpeg,jpg,png|max:10000',
            ]);

            $data = [
                'title' => $request -> input('title'),
                'details' => $request -> input('details'),
            ];

            if($request -> hasFile('image')){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $path = "uploads/";
                $file->move($path, $path.time().'.'.$file->getClientOriginalExtension());
                $image1 = $path.time().'.'.$file->getClientOriginalExtension();
                $data['image'] = $image1;
            }

            $aboutus = \App\Models\Slider::first();
            $aboutus -> fill($data);
            $aboutus -> save(); 
            return redirect() -> route('slider.update')->with('success', "Data has been updated successfully!");  // Redirect to success url
        
        }else{
            return view('admin.slider', ['data' => \App\Models\Slider::first()]);
        }
    }
}
