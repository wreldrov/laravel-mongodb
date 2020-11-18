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

Route::get('library/search', 'LibraryController@search')->name('library.search');
Route::get('library/{library}/delete', 'LibraryController@delete')->name('library.delete');
Route::resource('library', 'LibraryController')->except(['destroy']);

Route::get('park/search', 'ParkController@search')->name('park.search');
Route::get('park/{library}/delete', 'ParkController@delete')->name('park.delete');
Route::resource('park', 'LibraryController')->except(['destroy']);
