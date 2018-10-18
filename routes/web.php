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

Route::get('/', 'HomeController@index');

Route::get('/details/{id}', 'HomeController@show');

Route::get('/profile', 'ProfileController@show');

Route::get('/createnew', 'ProductController@create');
Route::get('/editproduct/{id}', 'ProductController@change');

Route::post('/saveproduct', 'ProductController@store');

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/marksold/{id}', 'ProductController@marksold');
Route::get('/deleteproduct/{id}', 'ProductController@delete');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('update_product','ProductController@update_product');

