<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JawabanController extends Controller
{
    public function index()
    {
        $jawaban = DB::table('JawabanKuisioner')->get();

        return view('jawaban', ['jawaban' => $jawaban]);
    }
    public function tambah()
    {
        return view('tambahjawaban');
    }
    public function new(Request $request)
    {
        DB::table('jawabankuisioner')->insert([
            'id' => $request->id,
            'jawaban' => $request->jawaban
        ]);
        return redirect('/jawaban');
    }
    public function edit($id)
    {
        $jawaban = DB::table('jawabankuisioner')->where('id', $id)->get();

        return view('editjawaban', ['jawaban' => $jawaban]);
    }
    public function update(Request $request)
    {
        DB::table('jawabankuisioner')->where('id', $request->id)->update([
            'id' => $request->id,
            'jawaban' => $request->jawaban
        ]);
        return redirect('/jawaban');
    }
    public function hapus($id)
    {
        DB::table('jawabankuisioner')->where('id', $id)->delete();

        return redirect('/jawaban');
    }
}
