<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LanderDescription;
use Image;
use Carbon\Carbon;

class LanderDescriptionController extends Controller
{
     public function create_lander_description()
    {
    	return view('admin.lander_description.create');
    }
    public function lander_description_post(Request $request)
    {
    	$request->validate([
    		'title' => 'required|string',
    		'paragraph' => 'required|string',
    		'image' => 'required|mimes:jpeg,jpg,png,gif,svg',
    	]);

    	$banner_id = LanderDescription::insertGetId([
    		'title' => $request->title,
    		'paragraph' => $request->paragraph,
    		'created_at' => Carbon::now(),
    	]);

    	$uploaded_banner_photo = $request->file('image');
        $new_banner_photo_name = $banner_id.'.'.$uploaded_banner_photo->extension();
        $new_banner_photo_location = base_path('public/uploads/lander_description/'.$new_banner_photo_name);
        Image::make($uploaded_banner_photo)->resize(1402,657)->save($new_banner_photo_location);

        LanderDescription::find($banner_id)->update([
          'image' => $new_banner_photo_name,
        ]);
        return back()->with('success','Description Create Successfully');
    }
    public function view_lander_description()
    {
    	$all_banner = LanderDescription::orderBy('id','desc')->get();
    	return view('admin.lander_description.view',compact('all_banner'));
    }
    public function active_lander_description($description_id)
    {
    	$banner = LanderDescription::find($description_id);
    	if ($banner->status == 0) {
    		LanderDescription::find($description_id)->update([
    			'status' => 1,
    		]);
    	}
    	LanderDescription::where('id','!=',$description_id)->update([
    		'status' => 0,
    	]);
    
    	return back();
    }
    public function edit_lander_description($description_id)
    {
    	$banner = LanderDescription::find($description_id);
    	return view('admin.lander_description.edit',compact('banner'));
    }
    public function edit_lander_description_post(Request $request)
    {
    	$request->validate([
    		'title' => 'required|string',
    		'paragraph' => 'required',
    		'image' => 'mimes:jpeg,jpg,png,gif,svg',
    	]);

    	$get_image = LanderDescription::find($request->id);
        $request->all();
        if ($request->hasFile('image')) {
          if ($get_image->image != 'photo.jpg') {
            $delete_location = base_path('public/uploads/lander_description/'.$get_image->image);
            unlink($delete_location);
          }
        $uploaded_banner_photo = $request->file('image');
        $new_banner_photo_name = $get_image->id.'.'.$uploaded_banner_photo->extension();
        $new_banner_photo_location = base_path('public/uploads/lander_description/'.$new_banner_photo_name);
        Image::make($uploaded_banner_photo)->resize(1402,657)->save($new_banner_photo_location);
        $get_image->image = $new_banner_photo_name;
        }
        $get_image->title = $request->title;
        $get_image->paragraph = $request->paragraph;
        $get_image->save();
        return back()->with('success','Banner Edit Successfully');
    }
    public function delete_lander_description($description_id)
    {
    	LanderDescription::find($description_id)->delete();
    	return back()->with('delete','Banner Delete Successfully');
    }
}
