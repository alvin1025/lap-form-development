<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKd14ReqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kd14_reqs', function (Blueprint $table) {
            $table->id();
            $table->string('kd14no_cust', 20);
            $table->string('nama_cp1', 50);
            $table->string('phone_cp1', 20);
            $table->string('email_cp1', 50);
            $table->string('sd_cp1', 20);
            $table->string('sg_cp1', 20);
            $table->string('function_cp1', 100);
            $table->date('sinc_cp1');
            $table->string('add_addr_cp1');
            $table->string('mobile_cp1', 20);
            $table->string('cp1', 20);
            $table->string('status', 20);
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
        Schema::dropIfExists('kd14_reqs');
    }
}
