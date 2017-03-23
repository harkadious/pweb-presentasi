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
|
| buku = singular
| Buku = plural
|
|
| Thank you
*/

Route::get('/', 'BooksController@homepage');

//Route buat bikin buku
Route::get('/books/create', 'BooksController@create');
Route::post('/books/create', 'BooksController@store');

//Route buat liat Buku
Route::get('/books', 'BooksController@index');

//Route buat liat buku
Route::get('/buku/{idbuku}', 'BooksController@show');

//Route buat edit buku
Route::get('/books/{idbuku}/edit','BooksController@edit');
Route::post('/books/{idbuku}/edit','BooksController@update');

//Route buat ngehapus buku
Route::post('/books/{idbuku}/delete','BooksController@destroy');