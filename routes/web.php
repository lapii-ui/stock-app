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
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PageController@dashboard');
Route::get('/warehouse', 'PageController@warehouse')->name('warehouse');
Route::post('/proceed/warehouse', 'PageController@proceed')->name('proceed-warehouse');
Route::post('/update/warehouse/{id}', 'PageController@updateWarehouse')->name('update-warehouse');
