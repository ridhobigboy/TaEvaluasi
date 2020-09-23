<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuisionerkelasController extends Controller
{
    public function index()
    {
        return view('input');
    }
    public function proses(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'kelas_id' => 'required',
            'pertanyaan_id' => 'required',
            'jawaban_id' => 'required',
            'jawaban_text' => 'required|min:20|max:50'
        ]);
        return view('proses', ['data' => $request]);
    }
}
