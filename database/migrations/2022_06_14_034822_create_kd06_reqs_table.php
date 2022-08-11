<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKd06ReqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kd06_reqs', function (Blueprint $table) {
            $table->id();
            $table->string('kd6no_cust', 20);
            $table->string('sd', 20);
            $table->string('kd6sg', 20);
            $table->string('biz_type_p1', 20);
            $table->string('nama_agent1', 50);
            $table->float('allowance_qty');
            $table->string('kd6tax', 20);
            $table->string('del_con', 20);
            $table->string('payterm', 20);
            $table->string('kurs', 20);
            $table->string('satuan', 20);
            $table->string('sales', 60);
            $table->string('status', 20);
            $table->string('staff_member', 40);
            $table->date('from');
            $table->date('to');
            $table->string('pc', 100);
            $table->string('print', 100);
            $table->string('assigment', 100);
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
        Schema::dropIfExists('kd06_reqs');
    }
}
