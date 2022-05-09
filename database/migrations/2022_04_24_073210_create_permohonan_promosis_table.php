<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanPromosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_promosis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('no')->nullable();
            $table->string('date')->nullable();
            $table->string('nama')->nullable();
            $table->string('nrp')->nullable();
            $table->string('divisi')->nullable();
            $table->string('bagian')->nullable();
            $table->string('jabatan_sekarang')->nullable();
            $table->string('job_code_lama')->nullable();
            $table->string('jabatan_baru')->nullable();
            $table->string('job_code_baru')->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->string('masa_kerja')->nullable();
            $table->text('alasan_promosi')->nullable();
            $table->string('level')->nullable();
            $table->string('disetujui1')->nullable();
            $table->string('disetujui2')->nullable();
            $table->string('diajukan')->nullable();
            $table->string('mengetahui1')->nullable();
            $table->string('mengetahui2')->nullable();
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
        Schema::dropIfExists('permohonan_promosis');
    }
}
