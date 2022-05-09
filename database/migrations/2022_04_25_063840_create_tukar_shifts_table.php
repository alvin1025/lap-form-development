<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTukarShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tukar_shifts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('keperluan')->nullable();
            $table->string('nama')->nullable();
            $table->string('nrp')->nullable();
            $table->string('bagian')->nullable();
            $table->string('divisi')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('nama2')->nullable();
            $table->string('nrp2')->nullable();
            $table->string('bagian2')->nullable();
            $table->string('divisi2')->nullable();
            $table->string('shift')->nullable();
            $table->string('tukar_shift')->nullable();
            $table->date('masuk_kerja')->nullable();
            $table->date('libur')->nullable();
            $table->string('disetujui')->nullable();
            $table->string('disetujui2')->nullable();
            $table->string('disahkan')->nullable();
            $table->string('pemohon')->nullable();
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
        Schema::dropIfExists('tukar_shifts');
    }
}
