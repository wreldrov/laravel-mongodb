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
Route::get('library/{info}/delete', 'LibraryController@delete')->name('library.delete');
Route::resource('library', 'LibraryController',
                [
                    'parameters' => [
                        'theatre' => 'info'
                    ]
                ]
)
     ->except(['destroy']);


Route::get('park/search', 'ParkController@search')->name('park.search');
Route::get('park/{info}/delete', 'ParkController@delete')->name('park.delete');
Route::resource('park', 'ParkController',
                [
                    'parameters' => [
                        'theatre' => 'info'
                    ]
                ]
)
     ->except(['destroy']);


Route::get('theatre/search', 'TheatreController@search')->name('theatre.search');
Route::get('theatre/{info}/delete', 'TheatreController@delete')->name('theatre.delete');
Route::resource('theatre', 'TheatreController',
                [
                    'parameters' => [
                        'theatre' => 'info'
                    ]
                ]
)
    ->except(['destroy']);

