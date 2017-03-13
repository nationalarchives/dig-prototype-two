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

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('departments', 'DepartmentsController@index');

Route::get('collections', 'CollectionsController@index')->name('collections.index');

Route::get('collections/create', 'CollectionsController@create')->name('collections.create');

Route::post('collections/store', 'CollectionsController@store')->name('collections.store');

Route::get('collections/{collection}', 'CollectionsController@show')->name('collections.show');

Route::get('series', 'SeriesController@index')->name('series.index');

Route::get('series/{series}', 'SeriesController@show')->name('series.show');

Route::get('series/create/{collection}', 'SeriesController@create')->name('series.create');

Route::post('series/store', 'SeriesController@store')->name('series.store');

Route::get('batches/create/{series}', 'BatchesController@create')->name('batches.create');

Route::get('batches', 'BatchesController@index')->name('batches.index');

Route::get('batches/{batch}', 'BatchesController@show')->name('batches.show');

Route::post('batches/store', 'BatchesController@store')->name('batches.store');

Route::patch('batches/{id}/upload_metadata', 'BatchesController@upload_metadata')->name('batches.upload_metadata');

Route::any('batches/{id}/transfer_files', 'BatchesController@transfer_files')->name('batches.transfer_files');

Route::get('batches/{batch}/begin_transfer', 'BatchesController@begin_transfer')->name('batches.begin_transfer');

Route::delete('batches/{batch}/delete_metadata', 'BatchesController@delete_metadata')->name('batches.delete_metadata');

Route::get('batches/{batch}/review_metadata', 'BatchesController@review_metadata')->name('batches.review_metadata');

Route::get('record/{record}', 'RecordsController@show');

Route::get('admin', 'AdminController@show_form')->name('admin.show_form');

// Static pages

Route::get('guidance', 'StaticPagesController@guidance')->name('static.guidance');

Route::get('introduction', 'StaticPagesController@introduction')->name('static.introduction');

Auth::routes();
