<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisionerkelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuisionerkelas', function ($table) {
            $table->string('id')->primary();
            $table->char('nim',10);
            $table->integer('kelas_id');
            $table->foreignId('pertanyaan_id');
            $table->foreginId('jawaban_id');
            $table->text('jawaban_text',45)->nulllabel();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuisionerkelas');
    }
}
