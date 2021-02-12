<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Charts;
use Illuminate\Support\Facades\DB;
use App\kuisionerkelas;
use Redirect\Response;
use Carbon\Carbon;


class ChartController extends Controller
{
    public function index(){
    return view('adminlte.chart');
    }
}
