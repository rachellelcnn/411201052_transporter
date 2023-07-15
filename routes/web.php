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

Route::get('/transaksi', function () {
   return view('transaksi');
});
Route::get('/barang', function () {
   return view('barang');
});
Route::get('/edit', function () {
   return view('edit');
});
Route::get('/create', function () {
   return view('create');
});
Route::get('/', function () {
    return view('index');
 });
 Route::get('users', 'UserChartController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
