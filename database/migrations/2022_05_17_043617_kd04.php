<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kd04 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kd04', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kd03_id')->nullable();
            $table->foreignId('kd06_id')->nullable();
            $table->foreignId('kd11_id')->nullable();
            $table->foreignId('kd14_id')->nullable();
            $table->foreignId('kd05_id')->nullable();
            $table->foreignId('additional_id')->nullable();
            //bawaan
            $table->string('credit_limit', 100)->nullable();
            $table->string('payterm', 50)->nullable();
            $table->string('alasan_perubahan')->nullable();
            $table->string('history_pembayaran')->nullable();
            // tambahan
            $table->string('no_cust', 8)->nullable();
            $table->string('no_debitor', 20)->nullable();
            $table->string('no_creditor', 20)->nullable();
            $table->string('no_group_cust', 20)->nullable();
            $table->string('credit_cust', 20)->nullable();
            $table->date('credit_from')->nullable();
            $table->date('credit_to')->nullable();
            $table->string('credit_line_check', 100)->nullable();
            $table->string('block_delivery', 20)->nullable();
            $table->string('block', 100)->nullable();
            $table->string('block_reason', 100)->nullable();
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
        Schema::dropIfExists('kd04');
    }
}
