<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DescriptionOne;
use Carbon\Carbon;
use Image;

class DescriptionOneController extends Controller
{
    public function create_description_one()
    {
    	return view('admin.description_one.create');
    }
    public function description_one_post(Request $request)
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

    	$description_id = DescriptionOne::insertGetId([
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
        $new_description_photo_location = base_path('public/uploads/description_one/'.$new_description_photo_name);
        Image::make($uploaded_description_photo)->resize(1349,657)->save($new_description_photo_location);

        DescriptionOne::find($description_id)->update([
          'image' => $new_description_photo_name,
        ]);

        return back()->with('success','Description Create Successfully');
    }
    public function view_description_one()
    {
    	$all_description = DescriptionOne::orderBy('id','desc')->get();
    	return view('admin.description_one.view',compact('all_description'));
    }
    public function active_description_one($description_id)
    {
    	$description = DescriptionOne::find($description_id);
    	if ($description->status == 0) {
    		DescriptionOne::find($description_id)->update([
    			'status' => 1,
    		]);
    	}
    	DescriptionOne::where('id','!=',$description_id)->update([
    		'status' => 0,
    	]);
    	return back();
    }
    public function edit_description_one($description_id)
    {
    	$description = DescriptionOne::find($description_id);
    	return view('admin.description_one.edit',compact('description'));
    }
    public function edit_description_one_post(Request $request)
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

        $get_image = DescriptionOne::find($request->id);
        $request->all();
        if ($request->hasFile('image')) {
          if ($get_image->image != 'photo.jpg') {
            $delete_location = base_path('public/uploads/description_one/'.$get_image->image);
            unlink($delete_location);
          }
        $uploaded_description_photo = $request->file('image');
        $new_description_photo_name = $get_image->id.'.'.$uploaded_description_photo->extension();
        $new_description_photo_location = base_path('public/uploads/description_one/'.$new_description_photo_name);
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
    public function delete_description_one($description_id)
    {
    	DescriptionOne::find($description_id)->delete();
    	return back()->with('delete','Description Delete Successfully');
    }
}
