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

/*
* About
*/

Route::get('/about', function (){
    return view('books.about-us');
})
    ->name('about')
;

/*
* Login & Register
*/
Route::get('/login', 'LoginController@index')
    ->name('login.index')
;

Route::post('/login', 'LoginController@authenticate')
    ->name('login.authenticate')
;

Route::get('/logout', 'LoginController@logout')
    ->name('logout')
;
/*
* Publisher Routes
*/

Route::get('/publisher/admin', 'PublisherController@admin')
    ->name('publishers.admin')
;

Route::get('/publisher/create', 'PublisherController@create')
    ->name('publishers.create')
;

Route::post('/publisher/store', 'PublisherController@store')
    ->name('publishers.store')
    ->middleware('validator.publisher', 'create.publisher')
;

Route::get('/publisher/edit/{id}', 'PublisherController@edit')
    ->name('publishers.edit')
;

Route::post('/publisher/update', 'PublisherController@update')
    ->name('publishers.update')
    ->middleware('create.publisher')
    
;

Route::get('/publisher/show/{id}', 'PublisherController@show')
    ->name('publishers.show')
;

Route::get('/publisher/delete/{id}', 'PublisherController@delete')
    ->name('publishers.delete')
;

/*
* Book Routes
*/

Route::get('/book/admin', 'BookController@admin')
    ->name('books.admin')
;

Route::get('/book/create', 'BookController@create')
    ->name('books.create')
;

Route::post('/book/store', 'BookController@store')
    ->name('books.store')
    ->middleware('create.book', 'validator.book')
;

Route::get('/book/edit/{id}', 'BookController@edit')
    ->name('books.edit')
;

Route::post('/book/update', 'BookController@update')
    ->name('books.update')
;

Route::get('/book/show/{id}', 'BookController@show')
    ->name('books.show')
;

Route::get('/book/delete/{id}', 'BookController@delete')
    ->name('books.delete')
;

Route::get('/book/index', 'BookController@index')
    ->name('books.index')
;

Route::get('/book/filter', 'BookController@search')
        ->name('books.filter')
;

/*
* Searching routes
*/
Route::get('/quickSearch', 'SearchingController@quickSearch')
        ->name('searchs.quickSearch')
        ->middleware('create.quickCondition')
;

Route::get('/advanceSearch', 'SearchingController@advanceSearch')
        ->name('searchs.advanceSearch')
        ->middleware('create.advanceCondition')
;

/*
* Uploading routes
*/
Route::get('/upload', 'UploadingController@index')
        ->name('uploads.index')
        
;

Route::post('/upload/store', 'UploadingController@store')
        ->name('uploads.store')
        ->middleware('validator.image', 'create.image')
;





