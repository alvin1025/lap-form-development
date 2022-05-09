<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengantarKaryawanBarusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengantar_karyawan_barus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('no')->nullable();
            $table->string('nama')->nullable();
            $table->string('nrp')->nullable();
            $table->string('mulai_kerja')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('bagian')->nullable();
            $table->string('divisi')->nullable();
            $table->string('level')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('hormat_kami')->nullable();
            $table->string('diterima_oleh')->nullable();
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
        Schema::dropIfExists('pengantar_karyawan_barus');
    }
}
