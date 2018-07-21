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
Route::get('/', 'PostsController@index');

Route::get('/home','PostsController@home');

Route::get('/pictures','PostsController@pictures');

Route::get('/contact','PostsController@contact');

Route::get('/about','PostsController@about');

Route::get('/hotel','PostsController@hotel');

Route::get('/restaurant','PostsController@restaurant');

Route::post('/insert','Insert@insert');

