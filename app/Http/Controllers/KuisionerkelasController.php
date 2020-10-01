<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kuisionerkelas;
use Illuminate\SUpport\Facades\DB;

class KuisionerkelasController extends Controller
{
    public function index(){
        $kuisionerkelas = kuisionerkelas::all();

        return view('input');
    }
    public function proses(Request $request){
        // $data['jawaban'] = \DB::table('jawabankuisioner')->get();
        // return view('input',$data);

        // $this->validate($request,[
        // 'nim' => 'required',
        // 'kelas_id' => 'required',
        // 'pertanyaan_id' => 'required',
        // 'jawaban_id' => 'required',
        // 'jawaban_text' => 'required|min:20|max:50'
        // ]);
        // return view('proses',['data'=> $request]);
        $input = $request->all();

        proses::create($input);

        dd('proses successfuly');
        return view('input.index');
    }
    // public function insert(Request $request){
    //   if(!empty($request->input('jawaban_id'))){
    //         // $will_insert = [];
    //         // foreach ($request->input('jawaban_id') as $key => $value) {
    //         //      array_push($will_insert, ['jawaban_id'->$value]);
    //         // }
    //         // \DB::table('kuisionerkelas')->insert([$will_insert]);
    //     //    $input = join($request->input('jawaban_id'));
    //     //      \DB::table('kuisionerkelas')->insert(['jawaban_id'->$input]);
    //     }else{
    //         $input = '';
    //     }
    //    return redirect()->back();

    // }
}
