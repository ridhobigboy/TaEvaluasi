<?php

namespace App\Http\Controllers;

use App\Kuesioner_Kelas;
use Illuminate\Http\Request;
use App\kuisionerkelas;
use Illuminate\SUpport\Facades\DB;

class KuisionerkelasController extends Controller
{
    public function index()
    {
        $kuisionerkelas = kuisionerkelas::all();

        return view('input.index', /* compact('kuisionerkelas') */['input' => $kuisionerkelas]);
    }

    public function store(Request $request)
    {
        /* $this -> validate */
        $kuisionerkelas = new kuisionerkelas([
            'nim' => $request->get('nim'),
            'kelas' => $request->get('kelas_id'),
            'pertanyaan'=> $request->get('pertanyaan_id'),
            'jawaban' => $request->get('jawaban_id'),
            'jawaban' => $request->get('jawaban_text'),
        ]);
        $kuisionerkelas->save();
        // dd('proses successfuly');
        /* return redirect()->route('welcome'); */
    }
    /* public function store()
    {

    } */
}
