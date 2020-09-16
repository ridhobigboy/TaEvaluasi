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

    //Routing JawabanKuisioner
Route::get('/jawaban', 'JawabanController@index');
Route::get('/jawaban/tambah', 'JawabanController@tambah');
Route::post('/jawaban/new', 'JawabanController@new');
Route::get('/jawaban/edit/{id}', 'JawabanController@edit');
Route::post('/jawaban/update', 'JawabanController@update');
Route::get('/jawaban/hapus/{id}', 'JawabanController@hapus');

    //Routing KuisionerKelas
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

    //Routing Kelas
Route::get('kelas', 'KelasController@index');
Route::get('/kelas/tambah', 'KelasController@tambah');
Route::post('/kelas/new', 'KelasController@new');
Route::get('/kelas/edit/{id}', 'KelasController@edit');
Route::post('/kelas/update', 'KelasController@update');
Route::get('/kelas/hapus/{id}', 'KelasController@hapus');

    //Routing Dosen
Route::get('dosen', 'DosenController@index');
Route::get('/dosen/tambah', 'DosenController@tambah');
Route::post('/dosen/new', 'DosenController@new');
Route::get('/dosen/edit/{id}', 'DosenController@edit');
Route::post('/dosen/update', 'DosenController@update');
Route::get('/dosen/hapus/{id}', 'DosenController@hapus');

    //Routing Prodi
Route::get('prodi', 'ProdiController@index');
Route::get('/prodi/tambah', 'ProdiController@tambah');
Route::post('/prodi/new', 'ProdiController@new');
Route::get('/prodi/edit/{id}', 'ProdiController@edit');
Route::post('/prodi/update', 'ProdiController@update');
Route::get('prodi/hapus/{id}', 'ProdiController@hapus');

    //Routing Matakuliah
Route::get('matkul', 'MatakuliahController@index');
Route::get('/matkul/tambah', 'MatakuliahController@tambah');
Route::post('/matkul/new', 'MatakuliahController@new');
Route::get('/matkul/edit/{id}', 'MatakuliahController@edit');
Route::post('/matkul/update', 'MatakuliahController@update');
Route::get('/matkul/hapus/{id}', 'MatakuliahController@hapus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
