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

use App\Contracts\Entities\LibraryContracts;
use App\Library;

Route::get('/', function () {
    $libraries = Library::all();
    $l1 = Library::first();
    $l2 = Library::query()
        ->where(LibraryContracts::FIELD_NAME, 'name')
        ->get();

    return view('welcome', compact('libraries', 'l1', 'l2'));
});
