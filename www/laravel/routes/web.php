<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
	'uses' => 'Welcome@showWelcome',
	'as' => 'welcome'
    //return view('welcome');
]);

Route::get('/shows', [
	'uses' => 'Shows@Getshows',
	'as' => 'shows']);

Route::get('/proceed/{id}/',[
	'uses' => 'Proceed@Getproceed',
	'as' => 'proceed']);

Route::post('/proceed/{id}/',[
	'uses' => 'Proceed@postProceed',
	'as' => 'proceed']);

Route::get('/adminlogin',[
    'uses' => 'adminLogin@getAdminlogin',
    'as' => 'adminlogin']);

Route::post('/adminlogin',[
	'uses' => 'adminLogin@postadminLogin',
	'as' => 'adminlogin']);

Route::get('/adminregister',[
    'uses' => 'AdminRegister@getadminRegister',
    'as' => 'adminregister']);

Route::post('/adminregister',[
    'uses' => 'AdminRegister@postAdminregister',
    'as' => 'adminregister']);

//Route::group(['middleware' => 'auth'], function() {

	Route::get('/addcategory',[
		'uses' => 'AddCategory@getaddCategory',
		'as' => 'addcategory']);

	Route::post('/addcategory',[
		'uses' => 'AddCategory@doAdd',
		'as' => 'addcategory']);

	Route::get('/viewcategory',[
		'uses' => 'ViewCategory@getviewCategory',
		'as' => 'viewcategory']);

	Route::get('/addproduct',[
		'uses' => 'AddProduct@showProductpg',
		'as' => 'addproduct']);

	Route::post('/addproduct',[
		'uses' => 'AddProduct@doAddProducts',
		'as' => 'addproduct']);

	Route::get('/viewproduct',[
		'uses' => 'ViewProduct@getviewProduct',
		'as' => 'viewproduct']);

	Route::get('/editcategory/{id}/',[
		'uses' => 'Editcategory@geteditCategory',
		'as' => 'editcategory']);

	Route::post('/editcategory/{id}/',[
		'uses' => 'Editcategory@doEditCategory',
		'as' => 'editcategory']);

	Route::get('/editproduct/{id}/',[
		'uses' => 'Editproduct@showEditProductpage',
		'as' => 'editproduct']);

	Route::post('/editproduct/{id}/',[
		'uses' => 'Editproduct@doEditProduct',
		'as' => 'editproduct']);

	Route::get('/deleteproduct/{id}/',[
		'uses' => 'Deleteproduct@DoDeleteproduct',
		'as' => 'deleteproduct']);

	Route::get('/deletecategory/{id}/',[
		'uses' => 'Deletecategory@doDeleteCategory',
		'as' => 'deletecategory']);


//});
