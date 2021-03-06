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

Route::get('/', function(){
    return redirect(route('welcome'));
});

Route::get('/index.html', 'ArticleController@index')->name('welcome');

Route::get('/article-{id}.html', 'ArticleController@show')->name('article.show');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index');
    Route::group(['as' => 'backend.','namespace' => 'Backend','prefix'=>'backend/'],function(){
        Route::resource('articles','ArticleController');
        Route::resource('mottoes','MottoController');
    });
});
