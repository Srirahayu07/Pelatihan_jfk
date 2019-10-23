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

Route::get('/pelatihan', 'PelatihanController@surat');
Route::get('/pelatihan/tambah', 'PelatihanController@tambahsurat');
Route::post('/pelatihan/store', 'PelatihanController@store');
Route::get('/pelatihan/peserta', 'PelatihanController@tambahpeserta');
Route::post('/pelatihan/store1', 'PelatihanController@store1');
Route::get('/pelatihan/peserta/{id}/edit', 'PelatihanController@edit');
  Route::post('/pelatihan/peserta/{id}/update', 'PelatihanController@update');
  Route::get('/pelatihan/peserta/{id}/delete', 'PelatihanController@delete');
