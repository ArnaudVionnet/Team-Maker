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

   Route::group(['prefix' => ''], function(){
   		Route::get('/','HomeController@index');
   		Route::resource('article','ArticlesController');
   		Route::resource('forum','ForumController');
   		Route::resource('home','HomeController');
   		Route::resource('forum/sujet','PostController');
   		Route::post('forum/sujetshow/{id}','ForumController@sujetshow')->name('forum.sujetshow');
   	});
Auth::routes();
