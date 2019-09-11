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

// Route for admin
Route::get('/', 'HomeController@index');

// regist contact
Route::get('contact', 'ContactController@register');
Route::post('contact', 'ContactController@insertData');


Route::get('about', 'AboutController@register');


// Route for client


