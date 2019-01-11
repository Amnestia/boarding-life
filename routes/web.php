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

Route::get('/', 'PageController@getHome');

Route::get('/collection', 'PageController@getCollection');

Route::get('/search', 'PageController@getSearchPage');

Route::get('/insert','PageController@getInsertPage');

Route::post('/register','UserController@register');

Route::post('/login','UserController@signIn');

Route::get('/logout','UserController@signOut');

