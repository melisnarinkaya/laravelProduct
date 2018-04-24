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

Route::get('/','PostsController@index')->name('home');

//Route::get('/posts','PostsController@show');

//Route::get('/register','PostsController@create');
Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@already');
Route::post('/login','SessionsController@repository');
Route::get('/logout','SessionsController@destroy');

Route::get('/product','ProductController@create')->name('product');
Route::post('/product','ProductController@store');

Route::get('/urun','ProductController@urun');
/*Route::get('/urun', function () {
    return \App\Product::get();
});*/