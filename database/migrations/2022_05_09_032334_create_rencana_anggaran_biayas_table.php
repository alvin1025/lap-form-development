<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRencanaAnggaranBiayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rencana_anggaran_biayas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('no_anggaran_1')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('no_anggaran_2')->nullable();
            // no
            $table->string('no1')->nullable();
            $table->string('no2')->nullable();
            $table->string('no3')->nullable();
            $table->string('no4')->nullable();
            $table->string('no5')->nullable();
            $table->string('no6')->nullable();
            $table->string('no7')->nullable();
            $table->string('no8')->nullable();
            $table->string('no9')->nullable();
            $table->string('no10')->nullable();
            // uraian
            $table->text('uraian1')->nullable();
            $table->text('uraian2')->nullable();
            $table->text('uraian3')->nullable();
            $table->text('uraian4')->nullable();
            $table->text('uraian5')->nullable();
            $table->text('uraian6')->nullable();
            $table->text('uraian7')->nullable();
            $table->text('uraian8')->nullable();
            $table->text('uraian9')->nullable();
            $table->text('uraian10')->nullable();
            // biaya
            $table->float('biaya1')->nullable();
            $table->float('biaya2')->nullable();
            $table->float('biaya3')->nullable();
            $table->float('biaya4')->nullable();
            $table->float('biaya5')->nullable();
            $table->float('biaya6')->nullable();
            $table->float('biaya7')->nullable();
            $table->float('biaya8')->nullable();
            $table->float('biaya9')->nullable();
            $table->float('biaya10')->nullable();
            // Keterangan
            $table->text('keterangan1')->nullable();
            $table->text('keterangan2')->nullable();
            $table->text('keterangan3')->nullable();
            $table->text('keterangan4')->nullable();
            $table->text('keterangan5')->nullable();
            $table->text('keterangan6')->nullable();
            $table->text('keterangan7')->nullable();
            $table->text('keterangan8')->nullable();
            $table->text('keterangan9')->nullable();
            $table->text('keterangan10')->nullable();

            $table->string('disetujui_oleh')->nullable();
            $table->string('dibuat_oleh')->nullable();
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
        Schema::dropIfExists('rencana_anggaran_biayas');
    }
}
