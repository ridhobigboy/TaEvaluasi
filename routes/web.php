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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jawaban', 'JawabanController@index');
Route::get('/jawaban/tambah', 'JawabanController@tambah');
Route::post('/jawaban/new', 'JawabanController@new');
Route::get('/jawaban/edit/{id}', 'JawabanController@edit');
Route::post('/jawaban/update', 'JawabanController@update');
Route::get('/jawaban/hapus/{id}', 'JawabanController@hapus');

Route::get('/pertanyaan', 'KuisionerController@index');
Route::get('/pertanyaan/tambah', 'KuisionerController@tambah');
Route::post('/pertanyaan/baru', 'KuisionerController@baru');
Route::get('/pertanyaan/edit/{id}', 'KuisionerController@edit');
Route::post('/pertanyaan/update', 'KuisionerController@update');
Route::get('/pertanyaan/hapus/{id}', 'KuisionerController@hapus');

// Route::Get('/input', 'LoginController@input');
// Route::Post('/proses', 'LoginController@proses');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('chart', 'ChartController@index');
Route::get('/input', 'KuisionerkelasController@index');
Route::post('/proses', 'KuisionerkelasController@proses');

Route::get('kelas', 'KelasController@index');
Route::get('/kelas/tambah', 'KelasController@tambah');
Route::post('/kelas/new', 'KelasController@new');
Route::get('/kelas/edit/{id}', 'KelasController@edit');
Route::post('/kelas/update', 'KelasController@update');
Route::get('/kelas/hapus/{id}', 'KelasController@hapus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
