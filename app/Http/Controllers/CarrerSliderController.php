<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarrerSlider;
use Image;
use Carbon\Carbon;

class CarrerSliderController extends Controller
{
    public function create_carrer_slider()
    {
    	return view('admin.carrer_slider.create');
    }
    public function carrer_slider_post(Request $request)
    {
    	$request->validate([
    		'title' => 'required|string',
    		'description' => 'required|string',
    		'image' => 'required|mimes:jpeg,jpg,png,gif',
    	]);

    	$slider_id = CarrerSlider::insertGetId([
    		'title' => $request->title,
    		'description' => $request->description,
    		'created_at' => Carbon::now(),
    	]);

    	$uploaded_slider_photo = $request->file('image');
        $new_slider_photo_name = $slider_id.'.'.$uploaded_slider_photo->extension();
        $new_slider_photo_location = base_path('public/uploads/carrer_slider/'.$new_slider_photo_name);
        Image::make($uploaded_slider_photo)->resize(85,85)->save($new_slider_photo_location);

        CarrerSlider::find($slider_id)->update([
          'image' => $new_slider_photo_name,
        ]);
        return back()->with('success','Carrer Slider Create Successfully');
    }
    public function view_carrer_slider()
    {
    	$all_slider = CarrerSlider::orderBy('id','desc')->get();
    	return view('admin.carrer_slider.view',compact('all_slider'));
    }
    public function active_carrer_slider($carrer_slider_id)
    {
    	$slider = CarrerSlider::find($carrer_slider_id);
    	if ($slider->status == 0) {
    		CarrerSlider::find($carrer_slider_id)->update([
    			'status' => 1,
    		]);
    	}
    	else
    	{
    		CarrerSlider::find($carrer_slider_id)->update([
    			'status' => 0,
    		]);
    	}
    	return back();
    }
    public function edit_carrer_slider($carrer_slider_id)
    {
    	$slider = CarrerSlider::find($carrer_slider_id);
    	return view('admin.carrer_slider.edit',compact('slider'));
    }
    public function edit_carrer_slider_post(Request $request)
    {
    	$request->validate([
    		'title' => 'required|string',
    		'description' => 'required|string',
    	]);

    	$get_image = CarrerSlider::find($request->id);
        $request->all();
        if ($request->hasFile('image')) {
          if ($get_image->item_image != 'photo.jpg') {
            $delete_location = base_path('public/uploads/carrer_slider/'.$get_image->image);
            unlink($delete_location);
          }
        $uploaded_slider_photo = $request->file('image');
        $new_slider_photo_name = $get_image->id.'.'.$uploaded_slider_photo->extension();
        $new_slider_photo_location = base_path('public/uploads/carrer_slider/'.$new_slider_photo_name);
        Image::make($uploaded_slider_photo)->resize(85,85)->save($new_slider_photo_location);
        $get_image->image = $new_slider_photo_name;
        }
        $get_image->title = $request->title;
        $get_image->description = $request->description;
        $get_image->save();
        return back()->with('success','Carrer Slider Edit Successfully');
    }
    public function delete_carrer_slider($carrer_slider_id)
    {
    	CarrerSlider::find($carrer_slider_id)->delete();
    	return back()->with('delete','Slider Delete Successfully');
    }
}
