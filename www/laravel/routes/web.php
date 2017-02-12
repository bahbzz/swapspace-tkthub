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

Route::get('/', function () {
    return view('welcome');
});

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
