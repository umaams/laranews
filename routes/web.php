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

Route::get('/', 'Front\NewsController@index');

Auth::routes();

Route::get('/home', 'Front\NewsController@index')->name('home');
Route::resource('news', 'Admin\NewsController');
Route::resource('news_categories', 'Admin\NewsController');
