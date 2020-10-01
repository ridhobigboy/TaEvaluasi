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
        Schema::create('kuisionerkelas', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->char('nim',10);
            $table->integer('kelas_id');
            $table->integer('pertanyaan_id');
            $table->integer('jawaban_id');
            $table->text('jawaban_text',45);
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
