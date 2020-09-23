<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
    //mengambil data kuisioner
use App\kuisionerdosen;
    //meridericet keroute
use Illuminate\Routing\Redirector;

class KuisionerController extends Controller
{
    public function index(){
        $pertanyaan = kuisionerdosen::all();

        // return view('adminlte/pertanyaan',['pertanyaan' =>$pertanyaan]);
        return redirect()->route('pertanyaan.index');
    }
    public function tambah(){
        return view('adminlte/tambahpertanyaan');
    }
    public function baru(Request $request){
        $this->validate($request,[
    		'id' => 'required',
            'pertanyaan' => 'required',
            'aktif'=> 'required',
            'choice'=>'required'
    	]);

        Pertanyaan::create([
    		'id' => $request->id,
            'pertanyaan' => $request->pertanyaan,
            'aktif' => $request->aktif,
            'choice' => $request->choice
    	]);

    	return redirect('adminlte/pertanyaan');
    }
    public function edit($id){
        $pertanyaan = DB::table('kuisionerdosen')->where('id',$id)->get();

        return view('adminlte/editpertanyaan',['pertanyaan' => $pertanyaan]);
    }
    public function update($id,Request $request){
        $this->validate($request,[
            'id' => 'required',
            'pertanyaan' => 'required',
            'aktif'=> 'required',
            'choice' => 'required'
         ]);

         $pertanyaan = Kuisionerdosen::find($id);
         $pertanyaan->pertanyaan = $request->pertanyaan;
         $pertanyaan->aktif = $request->aktif;
         $pertanyaan->choice = $request->choice;
         $pertanyaan->save();
         return redirect('/pertanyaan');
    }
    public function hapus($id){
        $pertanyaan = kuisionerdosen::find($id);
        $pertanyaan->delete();
        return redirect('/pertanyaan');
    }
}
