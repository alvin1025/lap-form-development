<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratPengantarBerobatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_pengantar_berobats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('umur')->nullable();
            $table->string('nrp')->nullable();
            $table->string('nik')->nullable();
            $table->string('bagian')->nullable();
            $table->string('jam')->nullable();
            $table->text('kronologi')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('hormat_kami')->nullable();
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
        Schema::dropIfExists('surat_pengantar_berobats');
    }
}
