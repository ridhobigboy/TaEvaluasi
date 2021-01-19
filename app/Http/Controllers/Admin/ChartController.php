<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Charts;
use Illuminate\Support\Facades\DB;
use App\kuisionerkelas;
use Redirect\Response;
use Carbon\Carbon;


class ChartController extends Controller
{
    public function index(){
    $record = kuisionerkelas::select(DB::raw("COUNT(*) as count"), DB::raw("pertanyaan_id(creted_at) as pertanyaan"),DB::raw("jawaban_id(created_at) as jawaban"))
    ->where('created_at','>','pertanyaan')
    ->groupBy('pertanyaan_id','pertanyaan')
    ->orderBy('pertanyaan')
    ->get();

    $data = [];

    foreach($record as $row) {
        $data['label'][] = $row->pertanyaan_id;
        $data['data'][] = (int) $row->count;
     }
     $data['chart_data'] = json_encode($data);
     return view('chart',$data);
    }
}
