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
        return view('adminlte.ex');
    }
    public function chartjs()
    {
      /* $pertanyaan_id = pertanyaan_id::select(DB::raw("SUM(pertanyaan_id) as count"))

        ->orderBy("created_at")

        ->groupBy(DB::raw("pertanyaan_id(created_at)"))

        ->get()->toArray();

    $pertanyaan_id = array_column($pertanyaan_id, 'count'); */



    $jawaban_id = jawaban_id::select(DB::raw("SUM(jawaban_id) as count"))

        ->orderBy("created_at")

        ->groupBy(DB::raw("jawaban_id(created_at)"))

        ->get()->toArray();

    $jawaban_id = array_column($jawaban_id, 'count');



    return view('adminlte.ex')

            /* ->with('pertanyaan_id',json_encode($pertanyaan_id,JSON_NUMERIC_CHECK)) */

            ->with('jawaban_id',json_encode($jawaban_id,JSON_NUMERIC_CHECK));
        }
}
