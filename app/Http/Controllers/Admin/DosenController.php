<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = DB::table('dosen')->get();

        return view('dosen', ['dosen' => $dosen]);
    }
    public function tambah()
    {
        return view('tambahdosen');
    }
    public function new(Request $request)
    {
        DB::table('dosen')->insert([
            'id' => $request->id,
            'nama' => $request->nama
        ]);
        return redirect('/dosen');
    }
    public function edit($id)
    {
        $dosen = DB::table('dosen')->where('id', $id)->get();

        return view('editdosen', ['dosen' => $dosen]);
    }
    public function update(Request $request)
    {
        DB::table('dosen')->where('id', $request->id)->update([
            'id' => $request->id,
            'nama' => $request->nama
        ]);
        return redirect('/dosen');
    }
    public function hapus($id)
    {
        DB::table('dosen')->where('id', $id)->delete();

        return redirect('dosen');
    }
}
