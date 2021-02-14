<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratMutasiJabatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_mutasi_jabatans', function (Blueprint $table) {
            $table->string('sk_mutasi_jabatan')->primary();
            $table->date('tanggal_mutasi_jabatan');
            $table->text('ket_mutasi_jabatan');
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
        Schema::dropIfExists('surat_mutasi_jabatans');
    }
}
