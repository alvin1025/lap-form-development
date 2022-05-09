<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarKebutuhanMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_kebutuhan_materials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('no_kebutuhan_1')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('no_kebutuhan_2')->nullable();
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
            // QTT
            $table->float('qtt1')->nullable();
            $table->float('qtt2')->nullable();
            $table->float('qtt3')->nullable();
            $table->float('qtt4')->nullable();
            $table->float('qtt5')->nullable();
            $table->float('qtt6')->nullable();
            $table->float('qtt7')->nullable();
            $table->float('qtt8')->nullable();
            $table->float('qtt9')->nullable();
            $table->float('qtt10')->nullable();
            // harga
            $table->float('harga1')->nullable();
            $table->float('harga2')->nullable();
            $table->float('harga3')->nullable();
            $table->float('harga4')->nullable();
            $table->float('harga5')->nullable();
            $table->float('harga6')->nullable();
            $table->float('harga7')->nullable();
            $table->float('harga8')->nullable();
            $table->float('harga9')->nullable();
            $table->float('harga10')->nullable();
            // TTLharga
            $table->float('ttl_harga1')->nullable();
            $table->float('ttl_harga2')->nullable();
            $table->float('ttl_harga3')->nullable();
            $table->float('ttl_harga4')->nullable();
            $table->float('ttl_harga5')->nullable();
            $table->float('ttl_harga6')->nullable();
            $table->float('ttl_harga7')->nullable();
            $table->float('ttl_harga8')->nullable();
            $table->float('ttl_harga9')->nullable();
            $table->float('ttl_harga10')->nullable();
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

            $table->string('diperiksa_oleh')->nullable();
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
        Schema::dropIfExists('daftar_kebutuhan_materials');
    }
}
