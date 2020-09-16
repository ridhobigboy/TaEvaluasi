<?php

use App\Http\Controllers\Admin\ExController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hi ini dashboard admin  ';
});


Route::get('/ex', 'ExController@index');
