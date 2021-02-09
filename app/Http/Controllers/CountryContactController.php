<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CountryContact;
use Carbon\Carbon;

class CountryContactController extends Controller
{
    public function create_country_contact()
    {
    	return view('admin.country_contact.create');
    }
    public function country_contact_post(Request $request)
    {
    	$request->validate([
    		'title' => 'required',
    		'country_one' => 'required',
    		'country_two' => 'required',
    		'country_three' => 'required',
    		'country_four' => 'required',
    	]);

    	CountryContact::insert([
    		'title' => $request->title,
    		'country_one' => $request->country_one,
    		'country_two' => $request->country_two,
    		'country_three' => $request->country_three,
    		'country_four' => $request->country_four,
    		'created_at' => Carbon::now(),
    	]);
        return back()->with('success','Country Contact Create Successfully');
    }
    public function view_create_country()
    {
    	$all_countries = CountryContact::orderBy('id','desc')->get();
    	return view('admin.country_contact.view',compact('all_countries'));
    }
    public function active_country($country_id)
    {
        $description = CountryContact::find($country_id);
        if ($description->status == 0) {
            CountryContact::find($country_id)->update([
                'status' => 1,
            ]);
        }
        CountryContact::where('id','!=',$country_id)->update([
            'status' => 0,
        ]);
        return back();
    }
    public function edit_country($country_id)
    {
        $country = CountryContact::find($country_id);
        return view('admin.country_contact.edit',compact('country'));
    }
    public function edit_country_contact_post(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'country_one' => 'required',
            'country_two' => 'required',
            'country_three' => 'required',
            'country_four' => 'required',
        ]);

        CountryContact::find($request->id)->update([
            'title' => $request->title,
            'country_one' => $request->country_one,
            'country_two' => $request->country_two,
            'country_three' => $request->country_three,
            'country_four' => $request->country_four,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('success','Data Update Successfully');
    }
    public function delete_country($country_id)
    {
        CountryContact::find($country_id)->delete();
        return back()->with('delete','Data Delete Successfully');
    }
}
