<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

    //memanggil model jwaban
use App\jawabankuisioner;

    //meridericet ke route
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class JawabanController extends Controller
{
    public function index(){
            //mengambil data jawaban
        $jawaban = jawabankuisioner::select('id');

        return view('adminlte.jawaban',compact('jawaban'));
    }
    public function tambah(){
        return view('adminlte.tambahjawaban');
    }
    public function new(Request $request)
    {

        $this->validate($request, [
        'id' => 'required',
        'jawaban' => 'required'
       ]);
            //memanggil model
       jawabankuisioner::create([
           'id' => $request->id,
           'jawaban' => $request->jawaban
       ]);

       return redirect()->route('jawaban.index');
    }
    public function edit($id){
        $jawaban = jawabankuisioner::find($id);

        return view('adminlte.editjawaban',compact('jawaban'));
    }
    public function update($id,Request $request){
        $this->validate($request, [
            'id' => 'reuquired',
            'jawaban' => 'required'
        ]);

        $jawaban = jawabankuisioner::find($id);
        $jawaban->jawaban = $request->jawaban;
        $jawaban->save();
        return redirect()->route('jawaban.index');
    }
    public function hapus($id)
    {
        $jawaban = jawabankuisioner::find($id);
        $jawaban->delete();
        return redirect()->route('jawaban.index');

    }
}
