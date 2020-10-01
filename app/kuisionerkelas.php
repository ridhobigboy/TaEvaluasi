<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kuisionerkelas extends Model
{
    //
    protected $table = "kuisionerkelas";

    protected $fillable = ['id','nim','kelas_id','pertanyaan_id','jawaban_id'];

    public $timestamp = false;

    public function jawabankuisionser()
    {
        return $this->hasone('App\Jawabankuisioner');
    }
    public function kuisionerdosen()
    {
        return $this->hasone('App\kuisionerdosen');
    }
    public function kelas()
    {
        return $this->hasone('App\kelas');
    }
    public function setJawaban_idAttribute($value)
    {
        $this->attributes['jawaban_id'] = json_encode($value);
    }

}
