<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratPerintahKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_perintah_kerjas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('no_surat')->nullable();
            $table->string('nama')->nullable();
            $table->string('jabatan')->nullable();
            $table->text('alamat')->nullable();
            $table->string('nama_karyawan')->nullable();
            $table->string('perkerjaan')->nullable();
            $table->text('alamat_karyawan')->nullable();
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
            // jenis pekerjaan
            $table->string('jenis_pekerjaan1')->nullable();
            $table->string('jenis_pekerjaan2')->nullable();
            $table->string('jenis_pekerjaan3')->nullable();
            $table->string('jenis_pekerjaan4')->nullable();
            $table->string('jenis_pekerjaan5')->nullable();
            $table->string('jenis_pekerjaan6')->nullable();
            $table->string('jenis_pekerjaan7')->nullable();
            $table->string('jenis_pekerjaan8')->nullable();
            $table->string('jenis_pekerjaan9')->nullable();
            // volume
            $table->float('volume1')->nullable();
            $table->float('volume2')->nullable();
            $table->float('volume3')->nullable();
            $table->float('volume4')->nullable();
            $table->float('volume5')->nullable();
            $table->float('volume6')->nullable();
            $table->float('volume7')->nullable();
            $table->float('volume8')->nullable();
            $table->float('volume9')->nullable();
            // Harga Sat
            $table->float('harga_sat1')->nullable();
            $table->float('harga_sat2')->nullable();
            $table->float('harga_sat3')->nullable();
            $table->float('harga_sat4')->nullable();
            $table->float('harga_sat5')->nullable();
            $table->float('harga_sat6')->nullable();
            $table->float('harga_sat7')->nullable();
            $table->float('harga_sat8')->nullable();
            $table->float('harga_sat9')->nullable();
            // jumlah sat
            $table->float('jumlah_sat1')->nullable();
            $table->float('jumlah_sat2')->nullable();
            $table->float('jumlah_sat3')->nullable();
            $table->float('jumlah_sat4')->nullable();
            $table->float('jumlah_sat5')->nullable();
            $table->float('jumlah_sat6')->nullable();
            $table->float('jumlah_sat7')->nullable();
            $table->float('jumlah_sat8')->nullable();
            $table->float('jumlah_sat9')->nullable();
            // Jumlah total
            $table->float('jumlah_total')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('pelaksana')->nullable();
            $table->string('general_a_manager')->nullable();
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
        Schema::dropIfExists('surat_perintah_kerjas');
    }
}
