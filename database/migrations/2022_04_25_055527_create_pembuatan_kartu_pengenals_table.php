<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembuatanKartuPengenalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembuatan_kartu_pengenals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('nrp')->nullable();
            $table->string('bagian')->nullable();
            $table->string('divisi')->nullable();
            $table->string('disetujui')->nullable();
            $table->string('diketahui')->nullable();
            $table->string('pemohon')->nullable();
            $table->date('tanggal')->nullable();
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
        Schema::dropIfExists('pembuatan_kartu_pengenals');
    }
}
