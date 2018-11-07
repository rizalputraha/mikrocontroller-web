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
    Route::get('/monitor/grafik/detail','SungaiController@chart');

    //data-json untuk grafik
    Route::get('/monitor/grafik','SungaiController@chart');
    Route::get('/monitor/grafik-all','SungaiController@chartmore');
});



Auth::routes();