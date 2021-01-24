<?php

namespace App\Http\Controllers;

use App\test;
use Illuminate\Http\Request;
use App\kuisionerkelas;
use Illuminate\SUpport\Facades\DB;

class KuisionerkelasController extends Controller
{
    public function index()
    {
        $test = test::get();

        return view('input', compact('test'));
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
}
