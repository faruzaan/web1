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


