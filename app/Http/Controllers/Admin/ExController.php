<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExController extends Controller
{
    //
    public function index()
    {
        return view('adminlte.ex');
    }
}
