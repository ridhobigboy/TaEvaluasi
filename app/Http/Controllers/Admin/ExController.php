<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\kuisionerkelas;
use Illuminate\Http\Request;

class ExController extends Controller
{
    //
    public function index()
    {
         $kuisionerkelas = kuisionerkelas::select(\DB::raw("jawaban_id(*) as count"))
                     ->wherejawaban_id('created_at', date('Y'))
                     ->groupBy(\DB::raw("jawaban(created_at)"));
        return view('adminlte.ex');
    }
}
