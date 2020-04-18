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

Route::get('/','PageController@index');
Route::get('/loginn','PageController@login');
Route::get('course','PageController@user');
Route::get('admin','AdminController@index');

Route::get('admin/user','UserController@index');
Route::get('admin/user/add','UserController@create');
Route::post('admin/user/add', 'UserController@store');
Route::get('admin/user/{id}/edit','UserController@edit');
Route::patch('admin/user/{id}/edit','UserController@update');
Route::delete('admin/user/{id}/delete','UserController@destroy');

Route::get('admin/content','ContentController@index');

Route::get('admin/video','VideosController@index');
Route::get('admin/video/add','VideosController@create');
Route::post('admin/video/add', 'VideosController@store');
Route::get('admin/video/{id}/edit','VideosController@edit');
Route::patch('admin/video/{id}/edit','VideosController@update');
Route::delete('admin/video/{id}/delete','VideosController@destroy');

Route::get('admin/classes','ClassesController@index');
Route::get('admin/classes/add','ClassesController@create');
Route::post('admin/classes/add', 'ClassesController@store');
Route::get('admin/classes/{id}/edit','ClassesController@edit');
Route::patch('admin/classes/{id}/edit','ClassesController@update');
Route::delete('admin/classes/{id}/delete','ClassesController@destroy');

Route::get('admin/price','PriceController@index');
Route::get('admin/price/add','PriceController@create');
Route::post('admin/price/add', 'PriceController@store');
Route::get('admin/price/{id}/edit','PriceController@edit');
Route::patch('admin/price/{id}/edit','PriceController@update');
Route::delete('admin/price/{id}/delete','PriceController@destroy');

