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

Route::get('series/{series}', 'SeriesController@show')->name('series.show');

Route::get('batch/create/{series}', 'BatchesController@create')->name('batches.create');

Route::get('batch/{batch}', 'BatchesController@show')->name('batches.show');

Route::post('batches/store', 'BatchesController@store')->name('batches.store');

Route::patch('batches/upload_metadata', 'BatchesController@upload_metadata')->name('batches.upload_metadata');

Route::any('batches/transfer_files', 'BatchesController@transfer_files')->name('batches.transfer_files');

Route::get('batches/begin_transfer/{batch}', 'BatchesController@begin_transfer')->name('batches.begin_transfer');

Route::get('record/{record}', 'RecordsController@show');

// Static pages

Route::get('metadata_uploaded/{batch}', 'StaticPagesController@metadata_uploaded')->name('static.metadata_uploaded');

Route::get('metadata_review/{batch}', 'StaticPagesController@metadata_review')->name('static.metadata_review');


Route::get('guidance', 'StaticPagesController@guidance')->name('static.guidance');

Route::get('introduction', 'StaticPagesController@introduction')->name('static.introduction');

Auth::routes();
