<?php

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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/admin', function () {
    return view('admin.login');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// PROPERTIES 


// Add property

Route::get('add-property','PropertiesController\GeneralPropertiesController@addNewPropertyShowform');
Route::post('add-property','PropertiesController\GeneralPropertiesController@postNewProperty');
// Properties listing

Route::get('properties','PropertiesController\GeneralPropertiesController@showAllProperties');

//Inactive properties
Route::post('inactiveproperty','PropertiesController\GeneralPropertiesController@markAsInactive');
//Property detail
Route::get('properties/{id_property}/{url_property}','PropertiesController\GeneralPropertiesController@showDetails');
Route::get('properties/{id_property}','PropertiesController\GeneralPropertiesController@showDetails');
// Admin login

Route::post('admin_logout', 'AdminAuth\LoginController@logout');
Route::get('admin', 'AdminAuth\LoginController@showLoginForm');
Route::post('admin', 'AdminAuth\LoginController@login');

// Admin register - new admin

Route::get('admin/administrators/create', 'AdminAuth\RegisterController@showRegistrationForm');
Route::post('admin/administrators/create', 'AdminAuth\RegisterController@register');

//Admin RealtyRegistration - new Realty
Route::get('admin/properties/add-property','PropertiesController\AdminPropertiesController@showAddForm');
Route::post('admin/properties/add-property','PropertiesController\AdminPropertiesController@addNewProperty');

//Admin List of properties
Route::get('admin/properties/list','PropertiesController\AdminPropertiesController@showAllProperties');
// Admin & users Middlewares
// /*******/



//Logged in admins cannot access or send requests these pages
Route::group(['middleware' => 'admin_guest'], function() {

	Route::get('admin', 'AdminAuth\LoginController@showLoginForm');
	Route::post('admin', 'AdminAuth\LoginController@login');

});


//Only logged in admins can access or send requests to these pages
Route::group(['middleware' => 'admin_auth'], function(){

	Route::post('admin_logout', 'AdminAuth\LoginController@logout');
	Route::get('/admin/dashboard', 'AdminController@showDashboard');

});
