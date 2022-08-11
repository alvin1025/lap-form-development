<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKd11ReqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kd11_reqs', function (Blueprint $table) {
            $table->id();
            $table->string('kd11no_cust', 10)->nullable();
            $table->string('sd1', 10)->nullable();
            $table->string('sg1', 10)->nullable();
            $table->string('association_no1', 150)->nullable();
            $table->string('status1', 100)->nullable();
            $table->date('validity_from1')->nullable();
            $table->date('validity_to1')->nullable();
            $table->string('central_regu1', 100)->nullable();
            $table->string('conditions1', 100)->nullable();
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
        Schema::dropIfExists('kd11_reqs');
    }
}
