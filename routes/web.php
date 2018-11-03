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
    Route::get('/barang-masuk', 'DetailTransaksiController@masuk')->name('barang-masuk');
    Route::get('/create-masuk','DetailTransaksiController@create')->name('create-masuk');
    Route::post('/proses-masuk','DetailTransaksiController@prosesMasuk')->name('proses-masuk');
    Route::get('/barang-keluar', 'DetailTransaksiController@keluar')->name('barang-keluar');
    Route::get('/create-keluar', 'DetailTransaksiController@createKeluar')->name('create-keluar');
    Route::post('/proses-keluar', 'DetailTransaksiController@prosesKeluar')->name('proses-keluar');
    Route::get('/dashboard','DashboardController@index');
    Route::get('/laporan/barang','LaporanController@barang');
    Route::get('/laporan/transaksi','LaporanController@transaksi');
    Route::get('/laporan/barang-masuk','LaporanController@masuk');
    Route::get('/laporan/barang-keluar','LaporanController@keluar');
});



Auth::routes();