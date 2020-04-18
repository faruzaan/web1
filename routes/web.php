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
Route::get('/course','PageController@user');
Route::get('/content','ContentController@index');
Route::get('admin','AdminController@index');

Route::get('user','UserController@index');
Route::get('user/add','UserController@create');
Route::post('user/add', 'UserController@store');
Route::get('user/{id}/edit','UserController@edit');
Route::patch('user/{id}/edit','UserController@update');
Route::delete('user/{id}/delete','UserController@destroy');


