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

        return view('input', compact('kuisionerkelas'));
    }

    public function proses(Request $req)
    {

        $this->validate($req, [
            'nim'           => 'required',
            'kelas'         => 'required',
            'content'       => 'required',
            'pertanyaan_1'  => 'required',
            'pertanyaan_2'  => 'required',
            'pertanyaan_3'  => 'required',
        ]);

        Kuesioner_Kelas::create([
            'nim'           => $req->nim,
            'kelas'         => $req->kelas,
            'content'       => $req->content,
            'pertanyaan_1'  => $req->pertanyaan_1,
            'pertanyaan_2'  => $req->pertanyaan_2,
            'pertanyaan_3'  => $req->pertanyaan_3,
        ]);

        // dd('proses successfuly');
        return redirect()->route('welcome');
    }
}
