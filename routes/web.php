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
        return view('login.index');
    });





Auth::routes();

Route::get('/home', 'YoneticiPaneliController@index')->name('yoneticipaneli');
Route::resource('gelir', 'GelirController');
Route::resource('gider', 'GiderController');
Route::resource('raporlar', 'RaporController');
