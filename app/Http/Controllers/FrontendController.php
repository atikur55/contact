<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Description;
use App\CarrerSlider;
use App\CountryContact;
use App\Service;
use App\DescriptionOne;
use App\DescriptionTwo;
use App\LanderBanner;
use App\LanderDescription;

class FrontendController extends Controller
{
    public function index()
    {
    	$get_banner = Banner::where('status',1)->first();
    	$get_description = Description::where('status',1)->first();
    	$get_carrer_slider = CarrerSlider::where('status',1)->get();
    	$get_country = CountryContact::where('status',1)->first();
        $get_service = Service::where('status',1)->get();
        $get_description_one = DescriptionOne::where('status',1)->first();
    	$get_description_two = DescriptionTwo::where('status',1)->first();
    	
    	return view('frontend.index',compact('get_banner','get_description','get_carrer_slider','get_country','get_service','get_description_one','get_description_two'));
    }
    public function landing_page()
    {
        $get_land_slider = LanderBanner::where('status',1)->get();
        $get_land_description = LanderDescription::where('status',1)->first();
        return view('frontend.landing_page',compact('get_land_slider','get_land_description'));
    }

}
