<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Front End Route ==> Created By Atikur Rahman
|--------------------------------------------------------------------------
*/

Route::get('/','FrontendController@index');
Route::get('/active/{slider_id}','FrontendController@active');
Route::get('/landing_page','FrontendController@landing_page');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Admin Route ==> Banner Section Created By Atikur Rahman
|--------------------------------------------------------------------------
*/
Route::get('/create_banner','BannerPartController@create_banner')->name('create_banner');
Route::post('/banner_post','BannerPartController@banner_post')->name('banner_post');
Route::get('/view_banner','BannerPartController@view_banner')->name('view_banner');
Route::get('/active_banner/{banner_id}','BannerPartController@active_banner')->name('active_banner');
Route::get('/edit_banner/{banner_id}','BannerPartController@edit_banner')->name('view_banner');
Route::post('/edit_banner_post','BannerPartController@edit_banner_post')->name('edit_banner_post');
Route::post('/delete_banner/{banner_id}','BannerPartController@delete_banner')->name('delete_banner');
/*
|--------------------------------------------------------------------------
| Admin Route ==> Description Section Created By Atikur Rahman
|--------------------------------------------------------------------------
*/
Route::get('/create_description','DescriptionPartController@create_description')->name('create_description');
Route::post('/description_post','DescriptionPartController@description_post')->name('description_post');
Route::get('/view_description','DescriptionPartController@view_description')->name('view_description');
Route::get('/active_description/{description_id}','DescriptionPartController@active_description')->name('active_description');
Route::get('/edit_description/{description_id}','DescriptionPartController@edit_description')->name('edit_description');
Route::post('/edit_description_post','DescriptionPartController@edit_description_post')->name('edit_description_post');
Route::get('/delete_description/{description_id}','DescriptionPartController@delete_description')->name('delete_description');
/*
|--------------------------------------------------------------------------
| Admin Route ==> Country Contact Section Created By Atikur Rahman
|--------------------------------------------------------------------------
*/
Route::get('/create_country_contact','CountryContactController@create_country_contact')->name('create_country_contact');
Route::post('/country_contact_post','CountryContactController@country_contact_post')->name('country_contact_post');
Route::get('/view_create_country','CountryContactController@view_create_country')->name('view_create_country');
Route::get('/active_country/{country_id}','CountryContactController@active_country')->name('active_country');
Route::get('/edit_country/{country_id}','CountryContactController@edit_country')->name('edit_country');
Route::post('/edit_country_contact_post','CountryContactController@edit_country_contact_post')->name('edit_country_contact_post');
Route::get('/delete_country/{country_id}','CountryContactController@delete_country')->name('delete_country');
/*
|--------------------------------------------------------------------------
| Admin Route ==> Carrers Section Created By Atikur Rahman
|--------------------------------------------------------------------------
*/
Route::get('/create_carrer','CarrerController@create_carrer')->name('create_carrer');
Route::post('/carrer_post','CarrerController@carrer_post')->name('carrer_post');
Route::get('/view_carrer','CarrerController@view_carrer')->name('view_carrer');
Route::get('/active_carrer/{carrer_id}','CarrerController@active_carrer')->name('active_carrer');
Route::get('/edit_carrer/{carrer_id}','CarrerController@edit_carrer')->name('edit_carrer');
Route::post('/edit_carrer_post','CarrerController@edit_carrer_post')->name('edit_carrer_post');
Route::get('/delete_carrer/{carrer_id}','CarrerController@delete_carrer')->name('delete_carrer');
/*
|--------------------------------------------------------------------------
| Admin Route ==> Carrers Slider Section Created By Atikur Rahman
|--------------------------------------------------------------------------
*/
Route::get('/create_carrer_slider','CarrerSliderController@create_carrer_slider')->name('create_carrer_slider');
Route::post('/carrer_slider_post','CarrerSliderController@carrer_slider_post')->name('carrer_slider_post');
Route::get('/view_carrer_slider','CarrerSliderController@view_carrer_slider')->name('view_carrer_slider');
Route::get('/active_carrer_slider/{carrer_slider_id}','CarrerSliderController@active_carrer_slider')->name('active_carrer_slider');
Route::get('/edit_carrer_slider/{carrer_slider_id}','CarrerSliderController@edit_carrer_slider')->name('edit_carrer_slider');
Route::post('/edit_carrer_slider_post','CarrerSliderController@edit_carrer_slider_post')->name('edit_carrer_slider_post');
Route::get('/delete_carrer_slider/{carrer_slider_id}','CarrerSliderController@delete_carrer_slider')->name('delete_carrer_slider');
/*
|--------------------------------------------------------------------------
| Admin Route ==> Service Section Created By Atikur Rahman
|--------------------------------------------------------------------------
*/
Route::get('/create_services','ServiceController@create_services')->name('create_services');
Route::post('/service_post','ServiceController@service_post')->name('service_post');
Route::get('/view_services','ServiceController@view_services')->name('view_services');
Route::get('/active_service/{service_id}','ServiceController@active_service')->name('active_service');
Route::get('/edit_service/{service_id}','ServiceController@edit_service')->name('edit_service');
Route::post('/edit_service_post','ServiceController@edit_service_post')->name('edit_service_post');
Route::get('/delete_service/{service_id}','ServiceController@delete_service')->name('delete_service');

/*
|--------------------------------------------------------------------------
| Admin Route ==> Description One Section Created By Atikur Rahman
|--------------------------------------------------------------------------
*/
Route::get('/create_description_one','DescriptionOneController@create_description_one')->name('create_description_one');
Route::post('/description_one_post','DescriptionOneController@description_one_post')->name('description_one_post');
Route::get('/view_description_one','DescriptionOneController@view_description_one')->name('view_description_one');
Route::get('/active_description_one/{description_id}','DescriptionOneController@active_description_one')->name('active_description_one');
Route::get('/edit_description_one/{description_id}','DescriptionOneController@edit_description_one')->name('edit_description_one');
Route::post('/edit_description_one_post','DescriptionOneController@edit_description_one_post')->name('edit_description_one_post');
Route::get('/delete_description_one/{description_id}','DescriptionOneController@delete_description_one')->name('delete_description_one');

/*
|--------------------------------------------------------------------------
| Admin Route ==> Description Two Section Created By Atikur Rahman
|--------------------------------------------------------------------------
*/
Route::get('/create_description_two','DescriptionTwoController@create_description_two')->name('create_description_two');
Route::post('/description_two_post','DescriptionTwoController@description_two_post')->name('description_two_post');
Route::get('/view_description_two','DescriptionTwoController@view_description_two')->name('view_description_two');
Route::get('/active_description_two/{description_id}','DescriptionTwoController@active_description_two')->name('active_description_two');
Route::get('/edit_description_two/{description_id}','DescriptionTwoController@edit_description_two')->name('edit_description_two');
Route::post('/edit_description_two_post','DescriptionTwoController@edit_description_two_post')->name('edit_description_two_post');
Route::get('/delete_description_two/{description_id}','DescriptionTwoController@delete_description_two')->name('delete_description_two');

/*
|--------------------------------------------------------------------------
| Admin Route ==> Lander Banner Section Created By Atikur Rahman
|--------------------------------------------------------------------------
*/
Route::get('/create_lander_banner','LanderBannerController@create_lander_banner')->name('create_lander_banner');
Route::post('/lander_banner_post','LanderBannerController@lander_banner_post')->name('lander_banner_post');
Route::get('/view_lander_banner','LanderBannerController@view_lander_banner')->name('view_lander_banner');
Route::get('/active_lander_banner/{banner_id}','LanderBannerController@active_lander_banner')->name('active_lander_banner');
Route::get('/edit_lander_banner/{banner_id}','LanderBannerController@edit_lander_banner')->name('edit_lander_banner');
Route::post('/edit_lander_banner_post','LanderBannerController@edit_lander_banner_post')->name('edit_lander_banner_post');
Route::get('/delete_lander_banner/{banner_id}','LanderBannerController@delete_lander_banner')->name('delete_lander_banner');

/*
|--------------------------------------------------------------------------
| Admin Route ==> Lander Description Section Created By Atikur Rahman
|--------------------------------------------------------------------------
*/
Route::get('/create_lander_description','LanderDescriptionController@create_lander_description')->name('create_lander_description');
Route::post('/lander_description_post','LanderDescriptionController@lander_description_post')->name('lander_description_post');
Route::get('/view_lander_description','LanderDescriptionController@view_lander_description')->name('view_lander_description');
Route::get('/active_lander_description/{description_id}','LanderDescriptionController@active_lander_description')->name('active_lander_banner');
Route::get('/edit_lander_description/{description_id}','LanderDescriptionController@edit_lander_description')->name('edit_lander_description');
Route::post('/edit_lander_description_post','LanderDescriptionController@edit_lander_description_post')->name('edit_lander_description_post');
Route::get('/delete_lander_descriptionr/{description_id}','LanderDescriptionController@delete_lander_description')->name('delete_lander_description');
