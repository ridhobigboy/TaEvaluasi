<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    //
    protected $table = "prodi";

    protected $fillable = ['id','nama'];

    public $timestamp = false;
}
