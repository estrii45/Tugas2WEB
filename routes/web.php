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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ini adalah halaman transaksi

Route::get('transaksi', 'transaksicontroller@index')->name('transaksi');
Route::get('tambah-transaksi', 'transaksicontroller@creat')->name('tambah.transaksi');
Route::post('simpan-transaksi', 'transaksicontroller@store')->name('simpan.transaksi');

Route::get('edit-transaksi/{id}', 'transaksicontroller@edit')->name('edit.transaksi');
Route::post('update-transaksi{id}', 'transaksicontroller@update')->name('update.transaksi');

Route::get('hapus-transaksi/{id}', 'transaksicontroller@destroy')->name('hapus.transaksi');

