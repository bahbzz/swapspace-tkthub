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

