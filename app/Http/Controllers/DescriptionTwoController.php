<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DescriptionTwo;
use Image;
use Carbon\Carbon;

class DescriptionTwoController extends Controller
{
    public function create_description_two()
    {
    	return view('admin.description_two.create');
    }
    public function description_two_post(Request $request)
    {
    	$request->validate([
    		'heading' => 'required',
    		'short_heading' => 'required',
    		'case_head' => 'required',
    		'ca_one_title' => 'required',
    		'ca_one_btn' => 'required',
    		'ca_two_title' => 'required',
    		'ca_two_btn' => 'required',
    		'image' => 'required|mimes:jpeg,jpg,png,gif',
    	]);

    	$description_id = DescriptionTwo::insertGetId([
    		'heading' => $request->heading,
    		'short_heading' => $request->short_heading,
    		'case_head' => $request->case_head,
    		'ca_one_title' => $request->ca_one_title,
    		'ca_one_btn' => $request->ca_one_btn,
    		'ca_two_title' => $request->ca_two_title,
    		'ca_two_btn' => $request->ca_two_btn,
    		'created_at' => Carbon::now(),
    	]);

        $uploaded_description_photo = $request->file('image');
        $new_description_photo_name = $description_id.'.'.$uploaded_description_photo->extension();
        $new_description_photo_location = base_path('public/uploads/description_two/'.$new_description_photo_name);
        Image::make($uploaded_description_photo)->resize(1349,657)->save($new_description_photo_location);

        DescriptionTwo::find($description_id)->update([
          'image' => $new_description_photo_name,
        ]);

        return back()->with('success','Description Create Successfully');
    }
    public function view_description_two()
    {
    	$all_description = DescriptionTwo::orderBy('id','desc')->get();
    	return view('admin.description_two.view',compact('all_description'));
    }
    public function active_description_two($description_id)
    {
    	$description = DescriptionTwo::find($description_id);
    	if ($description->status == 0) {
    		DescriptionTwo::find($description_id)->update([
    			'status' => 1,
    		]);
    	}
    	DescriptionTwo::where('id','!=',$description_id)->update([
    		'status' => 0,
    	]);
    	return back();
    }
    public function edit_description_two($description_id)
    {
    	$description = DescriptionTwo::find($description_id);
    	return view('admin.description_two.edit',compact('description'));
    }
    public function edit_description_two_post(Request $request)
    {
    	$request->validate([
    		'heading' => 'required',
    		'short_heading' => 'required',
    		'case_head' => 'required',
    		'ca_one_title' => 'required',
    		'ca_one_btn' => 'required',
    		'ca_two_title' => 'required',
    		'ca_two_btn' => 'required',
    	]);

    	// Description::find($request->id)->update([
    	// 	'heading' => $request->heading,
    	// 	'short_heading' => $request->short_heading,
    	// 	'button' => $request->button,
    	// 	'case_head' => $request->case_head,
    	// 	'ca_one_title' => $request->ca_one_title,
    	// 	'ca_one_btn' => $request->ca_one_btn,
    	// 	'ca_two_title' => $request->ca_two_title,
    	// 	'ca_two_btn' => $request->ca_two_btn,
    	// 	'created_at' => Carbon::now(),
    	// ]);

        $get_image = DescriptionTwo::find($request->id);
        $request->all();
        if ($request->hasFile('image')) {
          if ($get_image->image != 'photo.jpg') {
            $delete_location = base_path('public/uploads/description_two/'.$get_image->image);
            unlink($delete_location);
          }
        $uploaded_description_photo = $request->file('image');
        $new_description_photo_name = $get_image->id.'.'.$uploaded_description_photo->extension();
        $new_description_photo_location = base_path('public/uploads/description_two/'.$new_description_photo_name);
        Image::make($uploaded_description_photo)->resize(1349,657)->save($new_description_photo_location);
        $get_image->image = $new_description_photo_name;
        }
        $get_image->heading = $request->heading;
        $get_image->short_heading = $request->short_heading;
        $get_image->case_head = $request->case_head;
        $get_image->ca_one_title = $request->ca_one_title;
        $get_image->ca_one_btn = $request->ca_one_btn;
        $get_image->ca_two_title = $request->ca_two_title;
        $get_image->ca_two_btn = $request->ca_two_btn;
        $get_image->save();
        return back()->with('success','Description Edit Successfully');
    }
    public function delete_description_two($description_id)
    {
    	DescriptionTwo::find($description_id)->delete();
    	return back()->with('delete','Description Delete Successfully');
    }
}
