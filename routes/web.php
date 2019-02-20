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
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/books','BooksController');
Route::resource('/registers','RegistersController');
//Route::get('/create', function () {
//    return view('books.books');
//});
//Route::get('/books','BooksController@sample');

Route::get('/lp', function () {
    return view('forms.about');
});
Route::get('/index','FormsController@index');
Route::get('/about','FormsController@about');
Route::get('/service','FormsController@service');
Route::get('/contact','FormsController@contact');
Route::get('/hello', function () {
    return "<h1> hai , I'm divya</h1>";
});
Route::get('/users/{id}', function ($id) {
    return 'my id is' .$id;
});