<?php
use App\Http\Requests\Request;
use App\Repos\PostcodesRepository;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.

|*/


Route::get('/', [
	'as'   => 'home',
	'uses' => 'PagesController@index'
]);

Route::get('/menu', [
	'as'   => 'menu',
	'uses' => 'MenuController@index'
]);

Route::get('/contact', [
	'as'   => 'menu',
	'uses' => 'PagesController@contact'
]);

Route::post('/check-postcode', [
	'as'   => 'check-postcode',
	'uses' => 'PagesController@postcode'
]);

Route::group(['middleware' => 'auth'], function(){

	Route::resource('product_map', 'Product_mapController');
	Route::resource('categories', 'CategoriesController');
	Route::resource('products', 'ProductsController');
	Route::resource('product_sides', 'Product_sidesController');
	Route::resource('sides', 'SidesController');
	Route::resource('sauces', 'SaucesController');
	Route::resource('salads', 'SaladsController');
	Route::resource('toppings', 'ToppingsController');

	//Wildcards ----

});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');