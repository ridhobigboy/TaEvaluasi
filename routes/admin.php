<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hi ini dashboard admin  ';
});


Route::get('/ex', 'ExController@index');

//Routing JawabanKuisioner
Route::get('/jawaban', 'JawabanController@index')->name('jawaban.index');
Route::get('/jawaban/tambah', 'JawabanController@tambah')->name('jawaban.tambah');
Route::post('/jawaban/new', 'JawabanController@new')->name('jawaban.new');
Route::get('/jawaban/edit/{id}', 'JawabanController@edit')->name('jawaban.edit');
Route::post('/jawaban/update', 'JawabanController@update')->name('jawaban.update');
Route::get('/jawaban/hapus/{id}', 'JawabanController@hapus')->name('jawaban.hapus');

//Routing KuisionerKelas
Route::get('/pertanyaan', 'KuisionerController@index')->name('pertanyaan.index');
Route::get('/pertanyaan/tambah', 'KuisionerController@tambah')->name('pertanyaan.tambah');
Route::post('/pertanyaan/baru', 'KuisionerController@baru')->name('pertanyaan.baru');
Route::get('/pertanyaan/edit/{id}', 'KuisionerController@edit')->name('pertanyaan.edit');
Route::post('/pertanyaan/update', 'KuisionerController@update')->name('pertanyaan.update');
Route::get('/pertanyaan/hapus/{id}', 'KuisionerController@hapus')->name('pertanyaan.hapus');

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

//Routing adminlte3
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
