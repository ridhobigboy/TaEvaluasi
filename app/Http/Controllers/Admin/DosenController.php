<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
    //memanggil model dosen
use App\dosen;
    //meridirect route
use Illumante\Routing\Redirector;
use Illumante\Support\Facades\DB;

class DosenController extends Controller
{
    public function index(){
        //mengambil data dosen
        $dosen = dosen::all();

        return view('adminlte.dosen',compact('dosen'));
    }
    public function tambah(){
        return view('adminlte.tambahdosen');
    }
    public function new(Request $request){
        $this->validate($request, [
            'id' => 'required',
            'jawaban' => 'required'
        ]);

        dosen::create([
            'id' => $request->id,
            'jawaban' => $request->jawaban
        ]);
        return redirect()->route('dosen.index');
    }
    public function edit($id)
    {
        $dosen = dosen::find($id);

        return view('adminlte.editdosen',compact('dosen'));
    }
    public function update($id, Request $request){
        $this->validate($request, [
            'id' => 'required',
            'nama' => 'required'
        ]);

        $dosen = dosen::find($id);
        $dosen->dosen = $request->id;
        $dosen->dosen = $request->nama;
        $dosen->save();
        return redirect()->route('adminlte.dosen');
    }
    public function hapus($id)
    {
        $dosen = dosen::find($id);
        $dosen->delete();
        return redirect('dosen.index');
    }
}
