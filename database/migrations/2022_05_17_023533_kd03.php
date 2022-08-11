<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kd03 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kd03', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kd06_id')->nullable();
            $table->foreignId('kd04_id')->nullable();
            $table->foreignId('kd11_id')->nullable();
            $table->foreignId('kd14_id')->nullable();
            $table->foreignId('kd05_id')->nullable();
            $table->foreignId('additional_id')->nullable();
            $table->string('class', 5)->nullable();
            $table->string('title', 10)->nullable();
            $table->string('no_cust', 8)->nullable();
            $table->string('kode_cust', 8)->nullable();
            $table->string('negara', 50)->nullable();
            $table->string('kode_county', 20)->nullable();
            $table->string('kota', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('telp', 50)->nullable();
            $table->string('npwp', 50)->nullable();

            //different
            $table->string('short_name', 10)->nullable();
            $table->string('nama1', 40)->nullable();
            $table->string('nama2', 40)->nullable();
            $table->string('street', 50)->nullable();
            $table->string('addit', 50)->nullable();
            $table->string('postal_code', 10)->nullable();
            $table->string('po_box', 20)->nullable();
            $table->string('tax', 20)->nullable();
            $table->string('mobile', 50)->nullable();
            $table->string('home', 50)->nullable();
            $table->string('fax', 20)->nullable();
            $table->string('status', 50)->nullable();
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
        Schema::dropIfExists('KD03');
    }
}
