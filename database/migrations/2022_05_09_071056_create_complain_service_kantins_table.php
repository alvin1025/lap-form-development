<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplainServiceKantinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complain_service_kantins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('nrp')->nullable();
            $table->string('divisi')->nullable();
            $table->string('bagian')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('variasi_makanan')->nullable();
            $table->string('pelayanan')->nullable();
            $table->string('kebersihan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('karyawan')->nullable();
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
        Schema::dropIfExists('complain_service_kantins');
    }
}
