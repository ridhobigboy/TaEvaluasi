<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = DB::table('matakuliah')->get();

        return view('matkul', ['matakuliah' => $matakuliah]);
    }
    public function tambah()
    {
        return view('tambahmatkul');
    }
    public function new(Request $request)
    {
        DB::table('mataluliah')->insert([
            'id' => $request->id,
            'nama' => $request->nama,
            'sks' => $request->sks
        ]);
        return redirect('/matkul');
    }
    public function edit($id)
    {
        $matakuliah = DB::table('matakuliah')->where('id', $id)->get();

        return view('editmatkul', ['matakuliah' => $matakuliah]);
    }
    public function update(Request $request)
    {
        DB::table('matakuliah')->where('id,$request->id')->update([
            'id' => $request->id,
            'nama' => $request->nama,
            'sks' => $request->sks
        ]);
        return redirect('/matkul');
    }
    public function hpaus($id)
    {
        DB::table('matakuliah')->where('id', $id)->delete();

        return redirect('/matkul');
    }
}
