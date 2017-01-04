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

Route::get('/', 'HomeController@index');

Route::get('departments', 'DepartmentsController@index');

Route::get('collections', 'CollectionsController@index');

Route::get('collections/{collection}', 'CollectionsController@show')->name('collections.show');

Route::get('series/{series}', 'SeriesController@show');

Route::get('batch/{batch}', 'BatchesController@show');

Route::get('record/{record}', 'RecordsController@show');

Auth::routes();
