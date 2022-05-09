<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeninggalkanTempatKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meninggalkan_tempat_kerjas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('nama')->nullable();
            $table->string('nrp')->nullable();
            $table->string('bagian')->nullable();
            $table->string('divisi')->nullable();
            $table->string('ijin_dari')->nullable();
            $table->string('sampai')->nullable();
            $table->string('keluar_jam')->nullable();
            $table->string('sampai_jam')->nullable();
            $table->string('diketahui')->nullable();
            $table->string('disetujui1')->nullable();
            $table->string('disetujui2')->nullable();
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
        Schema::dropIfExists('meninggalkan_tempat_kerjas');
    }
}
