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
    return view('welcome');
});

/*
Route::get('/cars','CarController@index');
Route::get('/create','CarController@create');
Route::post('/create','CarController@store');
Route::get('/cars/{carid}','CarController@show');
Route::post('/cars-update','CarController@edit');

*/

Route::resource('cars','CarController');