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
Route::group(['middleware' => ['web']], function () {
    Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' =>'BlogController@getSingle']);
    Route::get('contact', 'PagesController@getContact');
    Route::get('about', 'PagesController@getAbout');
    Route::get('/', 'PagesController@getindex');
    Route::resource('posts', 'PostController');
});
    
    
    
    


    


