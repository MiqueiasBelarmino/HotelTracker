<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/list', 'App\Http\Controllers\TrackerController@list')->name('list');
Route::get('/', 'App\Http\Controllers\TrackerController@search')->name('search');
Route::get('/search', 'App\Http\Controllers\TrackerController@search')->name('search');
Route::post('/search', 'App\Http\Controllers\TrackerController@searchSubmit')->name('search.submit');