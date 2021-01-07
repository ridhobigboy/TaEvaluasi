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
        $kuisionerkelas = kuisionerkelas::select('id');

        return view('input', compact('kuisionerkelas'));
    }

    public function store(Request $request)
    {
        $this -> validate($request, [
            'nim' => 'required',
            'kelas' => 'required',
            'pertanyaan' => 'required',
            'jawaban' => 'required',
            'jawaban_text' => 'required'
        ]);
        return redirect()->route('input.index');
    }
    /* public function store()
    {

    } */
}
