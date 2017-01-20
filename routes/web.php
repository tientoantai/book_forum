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

Route::get('/book-filter', function () {

    return view('books.book-filter')
        ->with([
            'books'      => Book::all(),
            'request'    => request(),
    ]);
})
        ->name('book-filter')

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

Route::get('/detail/{id}', 'BookController@detail')
    ->name('books.detail')
;

Route::get('/insert', 'BookController@insertform')
    ->name('insertBook');

Route::post('/insert', 'BookController@insert')
         ->middleware('validator.image', 'create.image', 'book.provider')
;

Route::get('/update/{id}', 'BookController@updateform')
    ->name('updateBook');

Route::post('/update/{id}', 'BookController@update')
        ->middleware('create.image', 'book.provider')
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