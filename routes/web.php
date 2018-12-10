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
Route::get('/','Auth\LoginController@showloginform',['middleware ' => 'guest']);

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function(){
    Route::get('/dashboard','DashboardController@index');
    // tampilan dan proses create data
    Route::get('/monitor/create','SungaiController@create');
    Route::post('/monitor/store','SungaiController@store');
    //tabel monitoring sungai
    Route::get('/monitor/detail','SungaiController@index');
    //route untuk menampilkan semua grafik
    Route::get('/monitor/grafik/detail','GrafikController@index');
    // route create User
    Route::get('/user','UserController@index');
    Route::get('/user/create','UserController@create');
    Route::post('/user/store','UserController@store');

    //data-json untuk grafik
    Route::get('/monitor/grafik/tinggi','GrafikController@chartting');
    Route::get('/monitor/grafik/kecepatan','GrafikController@chartkec');
    Route::get('/monitor/grafik/kekeruhan','GrafikController@chartker');
});



Auth::routes();