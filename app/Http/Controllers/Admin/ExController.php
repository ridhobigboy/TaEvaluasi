<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\kuisionerkelas;

class ExController extends Controller
{
    //
    public function index()
    {
        //  $baru = kuisionerkelas::select(\DB::raw("jawaban_id(*) as count"))
        //      ->whereJawaban('id', Jawaban("jawaban"))
        //      ->groupBy(\DB::raw("jawaban_id(created_at)"))
        //      ->pluck('count');
        return view('adminlte.ex');
    }
}
