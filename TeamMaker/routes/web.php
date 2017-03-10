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


/*Route::get('/accueil', 'PagesController@accueil')->name('accueil'); 


   Route::get('/projet', 'PagesController@projet')->name('projet'); 


   Route::get('/projet/{id}', 'PagesController@projetshow')->name('projetshow'); 


   Route::get('/contact', 'PagesController@Contact')->name('contact'); 

      Route::get('/contact', 'PagesController@Contact')->name('contact'); */


   Route::group(['prefix' => ''], function(){
   		Route::resource('article','ArticlesController');

   	});