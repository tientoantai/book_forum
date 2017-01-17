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
use App\BookForum\Book\Book;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/book-add-to-cart', function () {
    return view('book-add-to-cart');
})
		->name('book-add-to-cart')
;

Route::get('/book-filter', function () {
	
    return view('book-filter')
    	->with('books', Book::all())
    ;
})
		->name('book-filter')
;

Route::get('/book-filter-list', function () {
    return view('book-filter-list');
})
		->name('book-filter-list')
;

Route::get('/book-inner', function () {
    return view('book-inner');
})
		->name('book-inner')
;

Route::get('/book-login', function () {
    return view('book-login');
})
		->name('book-login')
;

Route::get('/book-register', function () {
    return view('book-register');
})
		->name('book-register')
;

Route::get('/upload', 'UploadingController@index')
		->name('uploads.index')
		
;
Route::post('/upload/store', 'UploadingController@store')
		->name('uploads.store')
		->middleware('validator.image')
;

Route::get('/quickSearch', 'SearchingController@quickSearch')
		->name('searchs.quickSearch')
		->middleware('create.condition')
;

Route::get('/advanceSearch', 'SearchingController@advanceSearch')
		->name('searchs.advanceSearch')
		->middleware('create.condition')
;


Route::get('/publisher', 'PublisherController@index')
		->name('publishers.publisher-list')
;

Route::get('/publisher/add', 'PublisherController@add')
		->name('publishers.publisher-add')
;

Route::get('/books', 'BookController@listBook');
Route::get('/delete/{id}', 'BookController@delete');
Route::get('/detail/{id}', 'BookController@detail')
		->name('books.detail')
;
Route::get('/insert', 'BookController@insertform');
Route::post('/insert', 'BookController@insert')
		->name('books.insert')
		->middleware('create.image')
;
Route::get('/index','BookController@listbookhome')
		->name('index')
;

Route::get('/update/{id}', 'BookController@updateform');
Route::post('/update/{id}', 'BookController@update')
		->name('books.update')
		->middleware('create.image')
;
Route::get('/login','LoginController@formlogin');
Route::post('/login','LoginController@login');
Route::get('/logout','LogoutController@logout');
