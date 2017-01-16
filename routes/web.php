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
Route::get('/books', 'BookController@listBook');
Route::get('/delete/{id}', 'BookController@delete');
Route::get('/detail/{id}', 'BookController@detail');
Route::get('/insert', 'BookController@insertform');
Route::post('/insert', 'BookController@insert');
Route::get('/update/{id}', 'BookController@updateform');
Route::get('/update/{id}', 'BookController@update');
Route::get('/login','LoginController@formlogin');
Route::post('/login','LoginController@login');
Route::get('/logout','LogoutController@logout');
