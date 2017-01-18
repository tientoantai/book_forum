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
use Illuminate\Http\Request;

Route::get('/index', function () {
    return view('index');
})
		->name('index')
;

Route::get('/shop-ui-add-to-cart', function () {
    return view('shop-ui-add-to-cart');
})
		->name('shop-ui-add-to-cart')
;

Route::get('/shop-ui-filter-grid', function () {
	
    return view('shop-ui-filter-grid')
    	->with('books', Book::all())
    ;
})
		->name('shop-ui-filter-grid')
;

Route::get('/shop-ui-filter-list', function () {
    return view('shop-ui-filter-list');
})
		->name('shop-ui-filter-list')
;

Route::get('/shop-ui-inner', function () {
    return view('shop-ui-inner');
})
		->name('shop-ui-inner')
;

Route::get('/shop-ui-login', function () {
    return view('shop-ui-login');
})
		->name('shop-ui-login')
;

Route::get('/shop-ui-register', function () {
    return view('shop-ui-register');
})
		->name('shop-ui-register')
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
Route::get('/books', 'BookController@listBook')
    ->name('listBook');

Route::get('/delete/{id}', 'BookController@delete')
    ->name('deleteBook');

Route::get('/detail/{id}', 'BookController@detail');

Route::get('/insert', 'BookController@insertform')
    ->name('insertBook');

Route::post('/insert', 'BookController@insert')
         ->middleware('validator.image', 'create.image')
;

Route::get('/update/{id}', 'BookController@updateform')
    ->name('updateBook');

Route::post('/update/{id}', 'BookController@update')
        ->middleware('validator.image', 'create.image')
;

Route::get('/login','LoginController@formlogin')
        ->name('login')
;
Route::post('/login','LoginController@login')
    ->middleware('user')
;
Route::get('/logout','LogoutController@logout')
    ->name('logout');

Route::get('/home','BookController@listbookhome')
->name('home');

Route::get('/about', function (){
    return view('books.about-us');
})
    ->name('about')
;