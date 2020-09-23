<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
    //mengambil data dari kelas
use App\kelas;

class KelasController extends Controller
{
   public function index(){
       $kelas = kelas::all();

       return view('adminlte/kelas',['kelas'=>$kelas]);
   }
   public function tambah(){
       return view('tambahkelas');
   }
   public function new(Request $request){
       DB::table('kelas')->insert([
           'id' => $request->id,
           'kode' => $request->kode,
           'semester' => $request->semester,
           'dosen_id' => $request->dosen_id,
           'matakuliah_id'=> $request->matakuliah_id,
           'prodi_id'=> $request->prodi_id
       ]);
       return redirect('/kelas');
   }
   public function edit($id){
       $kelas = DB::table('kelas')->where('id',$id)->get();

       return view('editkelas',['kelas'=>$kelas]);
   }
   public function update(Request $request){
       DB::table('kelas')->where('id',$request->id)->update([
        'id' => $request->id,
        'kode' => $request->kode,
        'semester' => $request->semester,
        'dosen_id' => $request->dosen,
        'matakuliah_id'=> $request->matkul,
        'prodi_id'=> $request->prodi
       ]);
       return redirect('/kelas');
   }
   public function hapus($id){
       DB::table('kelas')->where('id',$id)->delete();

       return redirect('kelas');
   }
}
