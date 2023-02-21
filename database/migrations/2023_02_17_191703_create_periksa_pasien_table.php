<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriksaPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periksa_pasien', function (Blueprint $table) {
            $table->string('no_rawat');
            $table->string('kd_dokter');
            $table->text('ket_diagnosa');

            $table->foreign('no_rawat')->references('no_rawat')->on('registrasi_pasien')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kd_dokter')->references('kd_dokter')->on('dokter')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periksa_pasien');
    }
}
