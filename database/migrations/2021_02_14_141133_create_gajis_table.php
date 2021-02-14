<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->string('nupy');
            $table->foreign('nupy')->references('nupy')->on('pegawais');
            $table->integer('bulan');
            $table->integer('tahun');
            $table->primary(['nupy','bulan', 'tahun']);
            $table->integer('kuantitas');
            $table->integer('kinerja');
            $table->integer('tunjangan');
            $table->text('ket_gaji');
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
        Schema::dropIfExists('gajis');
    }
}
