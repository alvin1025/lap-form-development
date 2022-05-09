<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUndanganInstrukturTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('undangan_instruktur_trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('perihal')->nullable();
            $table->string('nama_trainer')->nullable();
            $table->string('nama_training')->nullable();
            $table->string('hari1')->nullable();
            $table->date('tanggal1')->nullable();
            $table->string('tempat1')->nullable();
            $table->string('peserta1')->nullable();
            $table->string('waktu1')->nullable();
            $table->string('hari2')->nullable();
            $table->date('tanggal2')->nullable();
            $table->string('tempat2')->nullable();
            $table->string('peserta2')->nullable();
            $table->string('waktu2')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('disetujui')->nullable();
            $table->string('dibuat')->nullable();
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
        Schema::dropIfExists('undangan_instruktur_trainings');
    }
}
