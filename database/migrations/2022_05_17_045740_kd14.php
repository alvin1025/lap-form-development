<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kd14 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kd14', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kd06_id')->nullable();
            $table->foreignId('kd04_id')->nullable();
            $table->foreignId('kd05_id')->nullable();
            $table->foreignId('kd11_id')->nullable();
            $table->foreignId('kd03_id')->nullable();
            $table->foreignId('additional_id')->nullable();
            $table->string('no_cust', 8)->nullable();


            $table->string('nama_cp1', 100)->nullable();
            $table->string('nama_cp2', 100)->nullable();
            $table->string('nama_cp3', 100)->nullable();
            $table->string('jabatan_cp1', 100)->nullable();
            $table->string('jabatan_cp2', 100)->nullable();
            $table->string('jabatan_cp3', 100)->nullable();
            $table->string('phone_cp1', 100)->nullable();
            $table->string('phone_cp2', 100)->nullable();
            $table->string('phone_cp3', 100)->nullable();
            $table->string('email_cp1', 100)->nullable();
            $table->string('email_cp2', 100)->nullable();
            $table->string('email_cp3', 100)->nullable();

            // differents
            $table->string('sd_cp1', 100)->nullable();
            $table->string('sd_cp2', 100)->nullable();
            $table->string('sd_cp3', 100)->nullable();
            $table->string('sg_cp1', 100)->nullable();
            $table->string('sg_cp2', 100)->nullable();
            $table->string('sg_cp3', 100)->nullable();
            $table->string('function_cp1', 100)->nullable();
            $table->string('function_cp2', 100)->nullable();
            $table->string('function_cp3', 100)->nullable();
            $table->string('role_cp1', 100)->nullable();
            $table->string('role_cp2', 100)->nullable();
            $table->string('role_cp3', 100)->nullable();
            $table->date('sinc_cp1')->nullable();
            $table->date('sinc_cp2')->nullable();
            $table->date('sinc_cp3')->nullable();
            $table->string('add_addr_cp1', 255)->nullable();
            $table->string('add_addr_cp2', 255)->nullable();
            $table->string('add_addr_cp3', 255)->nullable();
            $table->string('mobile_cp1', 15)->nullable();
            $table->string('mobile_cp2', 15)->nullable();
            $table->string('mobile_cp3', 15)->nullable();
            //cp1
            $table->string('cp1', 10)->nullable();
            $table->string('cp2', 10)->nullable();
            $table->string('cp3', 10)->nullable();

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
        Schema::dropIfExists('kd14');
    }
}
