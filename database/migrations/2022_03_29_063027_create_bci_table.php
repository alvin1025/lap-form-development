<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bci', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('no')->nullable();
            $table->date('date')->nullable();
            $table->string('customer')->nullable();
            $table->date('tanggal_memo')->nullable();
            $table->string('nomor_memo')->nullable();
            $table->string('jenis_sample')->nullable();
            $table->string('aktual_ne1_pakan')->nullable();
            $table->string('ne1_lycra')->nullable();
            $table->string('arah_twist_pakan')->nullable();
            $table->float('tpi_pakan')->nullable();
            $table->float('cv_tpi_pakan')->nullable();
            $table->float('ne1_slub')->nullable();
            $table->float('rata_length')->nullable();
            $table->float('min_length')->nullable();
            $table->float('max_length')->nullable();
            $table->float('ne1_pause')->nullable();
            $table->float('rata_distance')->nullable();
            $table->float('min_distance')->nullable();
            $table->float('max_distance')->nullable();
            $table->float('slub_meter')->nullable();
            $table->string('aktual_ne1_lusi')->nullable();
            $table->string('arah_twist_lusi')->nullable();
            $table->float('tpi_lusi')->nullable();
            $table->float('cv_tpi_lusi')->nullable();
            $table->string('status')->nullable();
            $table->string('note')->nullable();


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
        Schema::dropIfExists('bci');
    }
}
