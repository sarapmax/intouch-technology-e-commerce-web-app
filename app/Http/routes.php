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

Route::get('backoffice/login', 'AdminAuthController@getLogin');
Route::post('backoffice/login', 'AdminAuthController@postLogin');

Route::get('backoffice/logout', 'AdminAuthController@getLogout');

Route::get('backoffice/register', 'AdminAuthController@getRegister');
Route::post('backoffice/register', 'AdminAuthController@postRegister');


Route::get('backoffice/dashboard', 'DashboardController@index');

Route::resource('backoffice/category','CategoryController');