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
            'kelas_id'         => 'required',
            'pertanyaan_id'  => 'required',
            'pertanyaan_id'  => 'required',
            'pertanyaan_id'  => 'required',
        ]);

        Kuesioner_Kelas::create([
            'nim'           => $req->nim,
            'kelas_id'         => $req->kelas,
            'pertanyaan_id'  => $req->pertanyaan_id,
            'pertanyaan_id'  => $req->pertanyaan_id,
            'pertanyaan_id'  => $req->pertanyaan_id,
        ]);

        // dd('proses successfuly');
        return redirect()->route('welcome');
    }
}
