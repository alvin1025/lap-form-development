<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanKecelakaanKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_kecelakaan_kerjas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('nama_penderita')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('no_jamsostek')->nullable();
            $table->string('bagian')->nullable();
            $table->text('tempat_tinggal')->nullable();
            $table->string('tempat_kecelakaan')->nullable();
            $table->string('tanggal_kecelakaan')->nullable();
            $table->text('sebab_kecelakaan')->nullable();
            $table->string('keterangan_luka')->nullable();
            $table->string('penolong')->nullable();
            $table->string('dirawat_di')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('nrp')->nullable();
            $table->string('job_code')->nullable();
            $table->string('nik')->nullable();
            $table->date('tgl_dibuat')->nullable();
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
        Schema::dropIfExists('laporan_kecelakaan_kerjas');
    }
}
