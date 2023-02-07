<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhyusController extends Controller
{
    public function getwhychooseus(Request $request){
        return view("admin.whyus_list", ['data' => \App\Models\Whyus::first()]);
    }

    public function updatewhychooseus(Request $request){
       
        $request -> validate([
            'title_1' => 'required',
            'image_1' => 'mimes:jpeg,jpg,png|max:10000',
        ]);

        $data = [
            'title_1' => $request -> input('title_1'),
            'details_1' => $request -> input('details_1'),
        ];
        if($request -> hasFile('image_1')){
            $file = $request->file('image_1');
            $name = $file->getClientOriginalName();
            $path = "uploads/";
            $file->move($path, $path.time().'.'.$file->getClientOriginalExtension());
            $image1 = $path.time().'.'.$file->getClientOriginalExtension();
            $data['image_1'] = $image1;
        }

        $aboutus = \App\Models\Whyus::first();
        $aboutus -> fill($data);
        $aboutus -> save();
        return redirect() -> route('whyus.list')->with('success', "Data has been updated successfully!");

    }
}
