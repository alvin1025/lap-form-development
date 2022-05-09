<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratDendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_dendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('no')->nullable();
            $table->string('nama')->nullable();
            $table->string('nrp')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('level')->nullable();
            $table->string('bagian')->nullable();
            $table->string('divisi')->nullable();
            $table->text('denda')->nullable();
            $table->date('berlaku')->nullable();
            $table->string('diberi_denda')->nullable();
            $table->string('hr_manager')->nullable();
            $table->string('mengetahui')->nullable();
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
        Schema::dropIfExists('surat_dendas');
    }
}
