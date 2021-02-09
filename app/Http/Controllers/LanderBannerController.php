<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\landerBanner;
use Image;
use Carbon\Carbon;

class LanderBannerController extends Controller
{
    public function create_lander_banner()
    {
    	return view('admin.lander_banner.create');
    }
    public function lander_banner_post(Request $request)
    {
    	$request->validate([
    		'title' => 'required|string',
    		'image' => 'required|mimes:jpeg,jpg,png,gif',
    	]);

    	$banner_id = landerBanner::insertGetId([
    		'title' => $request->title,
    		'created_at' => Carbon::now(),
    	]);

    	$uploaded_banner_photo = $request->file('image');
        $new_banner_photo_name = $banner_id.'.'.$uploaded_banner_photo->extension();
        $new_banner_photo_location = base_path('public/uploads/lander_banner/'.$new_banner_photo_name);
        Image::make($uploaded_banner_photo)->resize(1402,657)->save($new_banner_photo_location);

        landerBanner::find($banner_id)->update([
          'image' => $new_banner_photo_name,
        ]);
        return back()->with('success','Banner Create Successfully');
    }
    public function view_lander_banner()
    {
    	$all_banner = landerBanner::orderBy('id','desc')->get();
    	return view('admin.lander_banner.view',compact('all_banner'));
    }
    public function active_lander_banner($banner_id)
    {
    	$banner = landerBanner::find($banner_id);
    	if ($banner->status == 0) {
    		landerBanner::find($banner_id)->update([
    			'status' => 1,
    		]);
    	}
    	else
    	{
    		landerBanner::find($banner_id)->update([
    			'status' => 0,
    		]);
    	}
    	return back();
    }
    public function edit_lander_banner($banner_id)
    {
    	$banner = landerBanner::find($banner_id);
    	return view('admin.lander_banner.edit',compact('banner'));
    }
    public function edit_lander_banner_post(Request $request)
    {
    	$request->validate([
    		'title' => 'required|string',
    		'image' => 'mimes:jpeg,jpg,png,gif',
    	]);

    	$get_image = landerBanner::find($request->id);
        $request->all();
        if ($request->hasFile('image')) {
          if ($get_image->image != 'photo.jpg') {
            $delete_location = base_path('public/uploads/lander_banner/'.$get_image->image);
            unlink($delete_location);
          }
        $uploaded_banner_photo = $request->file('image');
        $new_banner_photo_name = $get_image->id.'.'.$uploaded_banner_photo->extension();
        $new_banner_photo_location = base_path('public/uploads/lander_banner/'.$new_banner_photo_name);
        Image::make($uploaded_banner_photo)->resize(1402,657)->save($new_banner_photo_location);
        $get_image->image = $new_banner_photo_name;
        }
        $get_image->title = $request->title;
        $get_image->save();
        return back()->with('success','Banner Edit Successfully');
    }
    public function delete_lander_banner($banner_id)
    {
    	landerBanner::find($banner_id)->delete();
    	return back()->with('delete','Banner Delete Successfully');
    }
}
