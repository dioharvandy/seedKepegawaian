<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkMutasiKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sk_mutasi_keluars', function (Blueprint $table) {
            $table->string('nupy');
            $table->foreign('nupy')->references('nupy')->on('pegawais')->primary();
            $table->date('tanggal_keluar');
            $table->text('ket_mut_keluar');
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
        Schema::dropIfExists('sk_mutasi_keluars');
    }
}
