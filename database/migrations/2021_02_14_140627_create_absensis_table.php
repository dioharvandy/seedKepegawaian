<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->string('nupy');
            $table->foreign('nupy')->references('nupy')->on('pegawais');
            $table->foreignId('tanggal_absen_id')->constrained();
            $table->primary(['nupy', 'tanggal_absen_id']);
            $table->string('status_absen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensis');
    }
}
