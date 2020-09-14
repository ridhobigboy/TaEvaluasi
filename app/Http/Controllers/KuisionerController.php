<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KuisionerController extends Controller
{
    public function index(){
        $pertanyaan = DB::table('kuisionerdosen')->get();

        return view('pertanyaan',['pertanyaan' =>$pertanyaan]);
    }
    public function tambah(){
        return view('tambahpertanyaan');
    }
    public function baru(Request $request){
        DB::table('kuisionerdosen')->insert([
            'Id'=> $request->id,
            'pertanyaan'=> $request->pertanyaan,
            'aktif'=> $request->aktif,
            'choice' => $request->choice
        ]);
        return redirect('/pertanyaan');
    }
    public function edit($id){
        $pertanyaan = DB::table('kuisionerdosen')->where('id',$id)->get();

        return view('editpertanyaan',['pertanyaan' => $pertanyaan]);
    }
    public function update(Request $request){
        DB::table('kuisionerdosen')->where('id',$request->id)->update([
            'id' => $request->id,
            'pertanyaan' => $request->pertanyaan,
            'aktif' => $request->aktif,
            'choice' => $request->choice
        ]);
        return redirect('/pertanyaan');
    }
    public function hapus($id){
        DB::table('kuisionerdosen')->where('id',$id)->delete();

        return redirect('/pertanyaan');
    }
}
