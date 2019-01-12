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

Route::get('/insert','PageController@getInsertPage')->middleware('user');

Route::post('/insert','LocationController@insert')->middleware('user');

Route::post('/register','UserController@register');

Route::post('/login','UserController@signIn');

Route::get('/logout','UserController@signOut')->middleware('user');

Route::get('/search/{page}','LocationController@searchLocation');

Route::get('/review/{id}','PageController@getReview');

Route::post('/insert/review/{id}','ReviewController@newReview')->middleware('user');