<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('daftar', 'DaftarController');
Route::get('daftar/print/{id}', 'DaftarController@print')->name('daftar.print');
Route::get('daftar/cetak/{id}', 'DaftarController@cetak')->name('daftar.cetak');
Route::get('/siswa/dashboard', 'DaftarController@dashboardSiswa')->name('dashboardSiswa');
Route::post('/siswa/hapus/{id}', 'HomeController@hapus')->name('hapus');
