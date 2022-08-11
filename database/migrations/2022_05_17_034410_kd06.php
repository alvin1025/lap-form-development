<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kd06 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kd06', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kd03_id')->nullable();
            $table->foreignId('kd04_id')->nullable();
            $table->foreignId('kd11_id')->nullable();
            $table->foreignId('kd14_id')->nullable();
            $table->foreignId('kd05_id')->nullable();
            $table->foreignId('additional_id')->nullable();
            $table->string('no_cust', 20)->nullable();
            $table->string('sd', 5)->nullable();
            $table->string('biz_type_p1', 5)->nullable();
            $table->string('nama_agent1', 50)->nullable();
            $table->string('nama_agent2', 50)->nullable();
            $table->string('nama_agent3', 50)->nullable();
            $table->string('nama_agent4', 50)->nullable();
            $table->string('nama_agent5', 50)->nullable();
            $table->string('kode_brand1', 50)->nullable();
            $table->string('kode_brand2', 50)->nullable();
            $table->string('kode_brand3', 50)->nullable();
            $table->string('kode_brand4', 50)->nullable();
            $table->string('kode_brand5', 50)->nullable();
            $table->text('long_desc1')->nullable();
            $table->text('long_desc2')->nullable();
            $table->text('long_desc3')->nullable();
            $table->text('long_desc4')->nullable();
            $table->text('long_desc5')->nullable();
            $table->string('negara1', 50)->nullable();
            $table->string('negara2', 50)->nullable();
            $table->string('negara3', 50)->nullable();
            $table->string('negara4', 50)->nullable();
            $table->string('negara5', 50)->nullable();
            $table->float('allowance_qty')->nullable();
            $table->string('tax', 10)->nullable();
            $table->string('assigment', 10)->nullable();
            $table->string('del_con', 10)->nullable();
            $table->string('payterm', 10)->nullable();
            $table->string('kurs', 10)->nullable();
            $table->string('satuan', 10)->nullable();
            $table->string('sales', 50)->nullable();
            $table->string('status', 50)->nullable();
            $table->string('status', 50)->nullable();
            //add
            $table->string('staff_member', 30)->nullable();
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->string('pc', 1)->nullable();
            $table->string('print', 1)->nullable();

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
        Schema::dropIfExists('kd06');
    }
}
