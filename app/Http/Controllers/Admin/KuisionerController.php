<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KuisionerController extends Controller
{
    public function index()
    {
        $pertanyaan = DB::table('kuisionerdosen')->get();

        return view('adminlte.pertanyaan', compact('pertanyaan'));
    }
    public function tambah()
    {
        return view('adminlte.tambahpertanyaan');
    }
    public function baru(Request $request)
    {
        DB::table('kuisionerdosen')->insert([
            'Id' => $request->id,
            'pertanyaan' => $request->pertanyaan,
            'aktif' => $request->aktif,
            'choice' => $request->choice
        ]);
        return redirect()->route('pertanyaan.index');
    }
    public function edit($id)
    {
        $pertanyaan = DB::table('kuisionerdosen')->where('id', $id)->get();

        return view('adminlte.editpertanyaan', compact('pertanyaan'));
    }
    public function update(Request $request)
    {
        DB::table('kuisionerdosen')->where('id', $request->id)->update([
            'id' => $request->id,
            'pertanyaan' => $request->pertanyaan,
            'aktif' => $request->aktif,
            'choice' => $request->choice
        ]);
        return redirect()->route('pertanyaan.index');
    }
    public function hapus($id)
    {
        DB::table('kuisionerdosen')->where('id', $id)->delete();

        return redirect()->route('pertanyaan.index');
    }
}
