<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matkuliah extends Model
{
    //
    protected $table = "matakuliah";

    protected $fillable = ['id','nama','sks'];

    public $timestamp = false;
}
