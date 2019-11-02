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
Route::redirect('/', '/login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('home/thing', 'ThingController@index');
Route::get('home/users', 'UserController@index');
Route::post('home/new/users', 'UserController@save');
Route::get('home/new/users', 'UserController@create');
