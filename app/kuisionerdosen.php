<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kuisionerdosen extends Model
{
    //
    protected $table = "kuisionerdosen";

    protected $fillable = ['id', 'pertanyaan', 'aktif', 'choice'];

    // Tambahin ini di setiap model nanti
    public $timestamps = false;
}
