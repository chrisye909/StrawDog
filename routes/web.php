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

Route::get('/', 'ArticleController@index')->name('welcome');

Route::get('/article/{id}', 'ArticleController@show')->name('article.show');

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index');
    Route::group(['as' => 'backend.','namespace' => 'Backend','prefix'=>'backend/'],function(){
        Route::resource('articles','ArticleController');
        Route::resource('mottoes','MottoController');
    });
});
