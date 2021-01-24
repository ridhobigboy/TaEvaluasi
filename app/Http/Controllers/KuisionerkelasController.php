<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kuisionerkelas;
use App\Model\Test;
use Illuminate\SUpport\Facades\DB;

class KuisionerkelasController extends Controller
{
    public function index()
    {
        // $test = test::get();
        $kuesionerkelas = kuisionerkelas::get();

        return view('input', compact('kuesionerkelas'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'kelas' => 'required',
            'pertanyaan' => 'required',
            'jawaban' => 'required',
            'jawaban_text' => 'required'
        ]);
        return redirect()->route('input.index');
    }
}
