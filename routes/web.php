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
Route::group(['middleware' => ['auth:web', 'guest']], function () {
    Route::get('/hobi', 'App\Http\Controllers\IndexController@page')->name("hobies");
    Route::post('/hobi-ekle', 'App\Http\Controllers\IndexController@addHobi')->name("hobi-add");
    Route::post('/genel-hobi-ekle', 'App\Http\Controllers\IndexController@addGlobalHobie')->name("hobi-add-global");
});

Route::get('/kayit', 'App\Http\Controllers\IndexController@index')->name('index');
Route::post('/kayit-form', 'App\Http\Controllers\IndexController@createUser')->name('save');

