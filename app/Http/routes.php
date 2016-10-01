<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Slider;

Route::get('/', function()
{
	return view('kids.index');
});

Route::get('/about',function()
{
	return view('kids.aboutUs');
});

Route::get('/portfolio',function()
{
	return view('kids.portfolio');
});

Route::get('/services',function()
{
	return view('kids.services');
});

Route::get('/contact',function()
{
	return view('kids.contactUs');
});

Route::auth();

Route::get('/home', 'HomeController@index');


// Route::resource('/admin', 'AdminController');



// Route::get('hekimler/create',function(){
// 	return view('hekimler.create');
// });

Route::get('hekimler/index','HekimController@login', function(){
	return view('hekimler.index');
});

Route::get('/hekimler/show/{id}','MeqaleController@show');
Route::get('/hekimler/edit/{id}','MeqaleController@edit');
Route::get('/hekimler/destroy/{id}','MeqaleController@destroy');
Route::post('/hekimler/store', 'MeqaleController@store');
Route::post('/hekimler/update/{id}', 'MeqaleController@update');

Route::group(['middleware'=> 'admin'],function(){
	Route::group(['middleware'=> 'auth:admin'], function(){
		Route::get('/admin', 'AdminController@index');
	});

Route::get('/admin/login', 'AdminController@login');
Route::post('/admin/login', 'AdminController@postlogin');
Route::get('/admin/logout','AdminController@logout');
});

Route::group(['middleware'=> 'hekimler'],function(){
		Route::get('/hekimler', 'HekimController@index');
		Route::get('/hekimler/login','HekimController@login');
		Route::post('/hekimler/login','HekimController@postLogin');
		Route::get('/hekimler/logout','HekimController@postLogout');
});	


Route::get('/stats',function(){
	return view('kids.meqaleler');
});
