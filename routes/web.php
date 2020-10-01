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



// Route::Get('/input', 'LoginController@input');
// Route::Post('/proses', 'LoginController@proses');


// Route::get('chart', 'ChartController@index');
 Route::get('/input', 'KuisionerkelasController@index');
 Route::post('/proses', 'KuisionerkelasController@proses')->name('proses');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
