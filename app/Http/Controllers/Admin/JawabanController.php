<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

    //memanggil model jwaban
use App\jawabankuisioner;

class JawabanController extends Controller
{
    public function index(){
            //mengambil data jawaban
        $jawaban = jawabankuisioner::all();

        return view('adminlte/jawaban',['jawaban'=>$jawaban]);
    }
    public function tambah(){
        return view('tambahjawaban');
    }
    public function new(Request $request){
        DB::table('jawabankuisioner')->insert([
            'id' => $request->id,
            'jawaban' => $request->jawaban
        ]);
        return redirect('/jawaban');
    }
    public function edit($id){
        $jawaban = DB::table('jawabankuisioner')->where('id',$id)->get();

        return view('editjawaban',['jawaban' => $jawaban]);
    }
    public function update(Request $request){
        DB::table('jawabankuisioner')->where('id',$request->id)->update([
            'id' => $request->id,
            'jawaban' => $request->jawaban
        ]);
        return redirect('/jawaban');
    }
    public function hapus($id){
        DB::table('jawabankuisioner')->where('id',$id)->delete();

        return redirect('/jawaban');

    }
}
