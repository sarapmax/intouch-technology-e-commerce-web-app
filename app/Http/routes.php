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

// Route::get('/', function () {
//     return view('backoffice.category.index');
// });


Route::group(['middleware' => ['guest']], function () {
	//Guest
	Route::get('/', 'HomeController@index');

	Route::get('/products', 'FrontProductController@getProductsPage');

	Route::get('/products/{slug}', [
		'uses' => 'FrontProductController@getProduct',
		'as' => 'product'
	]);

	Route::get('/category/{slug}', [
		'uses' => 'FrontProductController@getCategory',
		'as' => 'category'
	]);

	//Admin
	Route::get('backoffice/logout', 'AdminAuthController@getLogout');

	Route::get('backoffice/login', 'AdminAuthController@getLogin');
	Route::post('backoffice/login', 'AdminAuthController@postLogin');

	Route::get('backoffice/register', 'AdminAuthController@getRegister');
	Route::post('backoffice/register', 'AdminAuthController@postRegister');
});

Route::group(['middleware' => ['admin', 'admin_activated']], function () {

	Route::get('backoffice/admin', [
		'uses' => 'AdminController@index',
		'as' => 'backoffice.admin.index'
	]);

	Route::get('backoffice/admin/activate_admin/{id}', [
		'uses' => 'AdminController@activate_admin',
		'as' => 'backoffice.admin.activate_admin'
	]);

	Route::get('backoffice/dashboard', [
		'uses' => 'DashboardController@index',
		'as' => 'backoffice.dashboard.index'
	]);

    Route::resource('backoffice/category','CategoryController');

    Route::resource('backoffice/product', 'ProductController');
});
