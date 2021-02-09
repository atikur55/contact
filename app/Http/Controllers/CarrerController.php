<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrer;
use Image;
use Carbon\Carbon;

class CarrerController extends Controller
{
    public function create_carrer()
    {
    	return view('admin.carrer.create');
    }
    public function carrer_post(Request $request)
    {

    	$request->validate([
    		'title' => 'required|string',
    		'short_desc' => 'required|string',
    		'image' => 'required|mimes:jpeg,jpg,png,gif',
    		'image_title' => 'required',
    		'end_title' => 'required',
    		'end_button' => 'required',
    	]);

    	$carrer_id = Carrer::insertGetId([
    		'title' => $request->title,
    		'short_desc' => $request->short_desc,
    		'image_title' => $request->image_title,
    		'end_title' => $request->end_title,
    		'end_button' => $request->end_button,
    		'created_at' => Carbon::now(),
    	]);

    	$uploaded_carrer_photo = $request->file('image');
        $new_carrer_photo_name = $carrer_id.'.'.$uploaded_carrer_photo->extension();
        $new_carrer_photo_location = base_path('public/uploads/carrer/'.$new_carrer_photo_name);
        Image::make($uploaded_carrer_photo)->resize(1140,427)->save($new_carrer_photo_location);

        Carrer::find($carrer_id)->update([
          'image' => $new_carrer_photo_name,
        ]);
        return back()->with('success','Carrer Create Successfully');
    }
    public function view_carrer()
    {
    	$all_carrer = Carrer::orderBy('id','desc')->get();
    	return view('admin.carrer.view',compact('all_carrer'));
    }
    public function active_carrer($carrer_id)
    {
    	$carrer = Carrer::find($carrer_id);
    	if ($carrer->status == 0) {
    		Carrer::find($carrer_id)->update([
    			'status' => 1,
    		]);
    	}
    	Carrer::where('id','!=',$carrer_id)->update([
    		'status' => 0,
    	]);
    	return back();
    }
    public function edit_carrer($carrer_id)
    {
    	$carrer = Carrer::find($carrer_id);
    	return view('admin.carrer.edit',compact('carrer'));
    }
    public function edit_carrer_post(Request $request)
    {
    	$request->validate([
    		'title' => 'required|string',
    		'short_desc' => 'required|string',
    		'image_title' => 'required',
    		'end_title' => 'required',
    		'end_button' => 'required',
    	]);

    	$get_image = Carrer::find($request->id);
        $request->all();
        if ($request->hasFile('image')) {
          if ($get_image->image != 'photo.jpg') {
            $delete_location = base_path('public/uploads/carrer/'.$get_image->image);
            unlink($delete_location);
          }
        $uploaded_carrer_photo = $request->file('image');
        $new_carrer_photo_name = $get_image->id.'.'.$uploaded_carrer_photo->extension();
        $new_carrer_photo_location = base_path('public/uploads/carrer/'.$new_carrer_photo_name);
        Image::make($uploaded_carrer_photo)->resize(1140,427)->save($new_carrer_photo_location);
        $get_image->image = $new_carrer_photo_name;
        }
        $get_image->title = $request->title;
        $get_image->short_desc = $request->short_desc;
        $get_image->image_title = $request->image_title;
        $get_image->end_title = $request->end_title;
        $get_image->end_button = $request->end_button;
        $get_image->save();
        return back()->with('success','Carrer Edit Successfully');
    }
    public function delete_carrer($carrer_id)
    {
    	Carrer::find($carrer_id)->delete();
    	return back()->with('delete','Carrer Delete Successfully');
    }
}
