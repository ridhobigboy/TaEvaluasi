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
})->name('welcome');

// Route::get('chart', 'ChartController@index');
Route::get('/input', 'KuisionerkelasController@index')->name('input.index');
Route::post('/input', 'KuisionerkelasController@proses')->name('proses');
