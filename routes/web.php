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

Route::get('/', function () {
    return view('search');
});

Route::resource('/admin', 'DashboardController');
Route::resource('/job', 'JobsController');
Route::resource('/settings', 'SettingController');
Route::get('/job', 'JobsController@search');
Route::get('/login', 'LoginController@index');
