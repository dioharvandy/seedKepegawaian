<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cutis', function (Blueprint $table) {
            $table->string('nupy');
            $table->foreign('nupy')->references('nupy')->on('pegawais');
            $table->date('tanggal_mulai_cuti');
            $table->date('tanggal_habis_cuti');
            $table->foreignId('surat_cuti_id')->constrained();
            $table->primary(['nupy', 'tanggal_mulai_cuti','surat_cuti_id']);
            $table->integer('lama_cuti');
            $table->text('ket_cuti');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cutis');
    }
}
