<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailJabatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_jabatans', function (Blueprint $table) {
            $table->string('nupy');
            $table->foreign('nupy')->references('nupy')->on('pegawais');
            $table->string('sk_mutasi_jabatan');
            $table->foreign('sk_mutasi_jabatan')->references('sk_mutasi_jabatan')->on('surat_mutasi_jabatans');
            $table->foreignId('jabatan_id')->constrained();
            $table->primary(['nupy','sk_mutasi_jabatan', 'jabatan_id']);
            $table->integer('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_jabatans');
    }
}
