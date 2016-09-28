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

Route::get('/admin',function()
{
	return view('adminPanel.index');
});

Route::get('/admin/tenzim',function()
{
	return view('adminPanel.tenzim');
});

Route::resource('/admin/tenzim', 'HPController');
