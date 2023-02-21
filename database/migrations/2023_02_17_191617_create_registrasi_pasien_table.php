<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasiPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi_pasien', function (Blueprint $table) {

            $table->unsignedDouble('no_rm');
            $table->string('no_registrasi');
            $table->string('no_rawat')->primary();
            $table->string('id_poli_tujuan');
            $table->date('tgl_registrasi');
            
            $table->foreign('no_rm')->references('no_rm')->on('pasien')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_poli_tujuan')->references('id_poli')->on('poli')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrasi_pasien');
    }
}















// //roleback foreignkey
// Schema::create('registrasi_pasien', function (Blueprint $table) {
//     $table->dropForeign(['no_rm']);
// });