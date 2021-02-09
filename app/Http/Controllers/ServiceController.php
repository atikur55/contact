<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Image;
use Carbon\Carbon;

class ServiceController extends Controller
{
    public function create_services()
    {
    	return view('admin.service.create');
    }
    public function service_post(Request $request)
    {
    	$request->validate([
    		'service_icon' => 'required|mimes:png',
    		'service_name' => 'required|string',
    		'image' => 'required|mimes:jpeg,jpg,png,gif',
    		'image_title' => 'required',
    		'image_sub_title' => 'required',
    	],[
    		'service_icon.required' => 'Icon Must be PNG Format'
    	]);

    	$service_id = Service::insertGetId([
    		'service_name' => $request->service_name,
    		'image_title' => $request->image_title,
    		'image_sub_title' => $request->image_sub_title,
    		'created_at' => Carbon::now(),
    	]);

    	$uploaded_service_icon_photo = $request->file('service_icon');
        $new_service_icon_photo_name = $service_id.'.'.$uploaded_service_icon_photo->extension();
        $new_service_icon_photo_location = base_path('public/uploads/service_icon/'.$new_service_icon_photo_name);
        Image::make($uploaded_service_icon_photo)->resize(50,50)->save($new_service_icon_photo_location);

        Service::find($service_id)->update([
          'service_icon' => $new_service_icon_photo_name,
        ]);

    	$uploaded_service_photo = $request->file('image');
        $new_service_photo_name = $service_id.'.'.$uploaded_service_photo->extension();
        $new_service_photo_location = base_path('public/uploads/service/'.$new_service_photo_name);
        Image::make($uploaded_service_photo)->resize(1115,588)->save($new_service_photo_location);

        Service::find($service_id)->update([
          'image' => $new_service_photo_name,
        ]);
        return back()->with('success','Service Create Successfully');
    }
    public function view_services()
    {
    	$all_service = Service::orderBy('id','desc')->get();
    	return view('admin.service.view',compact('all_service'));
    }
    public function active_service($service_id)
    {
    	$service = Service::find($service_id);
    	if ($service->status == 0) {
    		Service::find($service_id)->update([
    			'status' => 1,
    		]);
    	}
    	else
    	{
    		Service::find($service_id)->update([
    			'status' => 0,
    		]);
    	}	
    	return back();
    }
    public function edit_service($service_id)
    {
    	$service = Service::find($service_id);
    	return view('admin.service.edit',compact('service'));
    }
    public function edit_service_post(Request $request)
    {
    	$request->validate([
    		
    		'service_name' => 'required|string',
    		
    		'image_title' => 'required',
    		'image_sub_title' => 'required',
    	]);

    	$get_image = Service::find($request->id);
        $request->all();
        if ($request->hasFile('service_icon')) {
          if ($get_image->service_icon != 'icon.png') {
            $delete_location = base_path('public/uploads/service_icon/'.$get_image->service_icon);
            unlink($delete_location);
          }
        $uploaded_service_icon_photo = $request->file('service_icon');
        $new_service_icon_photo_name = $get_image->id.'.'.$uploaded_service_icon_photo->extension();
        $new_service_icon_photo_location = base_path('public/uploads/service_icon/'.$new_service_icon_photo_name);
        Image::make($uploaded_service_icon_photo)->resize(50,50)->save($new_service_icon_photo_location);
        $get_image->service_icon = $new_service_icon_photo_name;
        }

        if ($request->hasFile('image')) {
          if ($get_image->image != 'photo.jpg') {
            $delete_location = base_path('public/uploads/service/'.$get_image->image);
            unlink($delete_location);
          }
        $uploaded_service_photo = $request->file('image');
        $new_service_photo_name = $get_image->id.'.'.$uploaded_service_photo->extension();
        $new_service_photo_location = base_path('public/uploads/service/'.$new_service_photo_name);
        Image::make($uploaded_service_photo)->resize(1115,588)->save($new_service_photo_location);
        $get_image->image = $new_service_photo_name;
        }
        $get_image->service_name = $request->service_name;
        $get_image->image_title = $request->image_title;
        $get_image->image_sub_title = $request->image_sub_title;
        $get_image->save();
        return back()->with('success','Service Edit Successfully');
    }
   public function delete_service($service_id)
   {
   		Service::find($service_id)->delete();
    	return back()->with('delete','Banner Delete Successfully');
   }
}
