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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//CRUD Routes
Route::get('shop', 'shopController@index');

Route::get('create', 'shopController@create');

Route::post('store', 'shopController@store');
Route::get('show/{id}', 'shopController@show');

Route::get('edit/{id}', 'shopController@edit');

Route::post('update/{id}', 'shopController@update');

Route::get('delete/{id}', 'shopController@delete');