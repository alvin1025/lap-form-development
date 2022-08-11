<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKd04RequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kd04_requests', function (Blueprint $table) {
            $table->id();
            $table->string('kd4no_cust', 8);
            $table->string('credit_limit', 100);
            $table->string('no_debitor', 20);
            $table->string('no_creditor', 20);
            $table->string('no_group_cust', 20);
            $table->string('credit_cust', 20);
            $table->date('credit_from');
            $table->date('credit_to');
            $table->string('credit_line_check', 100);
            $table->string('block_delivery', 100);
            $table->string('block', 100);
            $table->string('block_reason');
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
        Schema::dropIfExists('kd04_requests');
    }
}
