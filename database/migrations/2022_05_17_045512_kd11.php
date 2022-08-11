<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kd11 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kd11', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kd06_id')->nullable();
            $table->foreignId('kd04_id')->nullable();
            $table->foreignId('kd05_id')->nullable();
            $table->foreignId('kd14_id')->nullable();
            $table->foreignId('kd03_id')->nullable();
            $table->foreignId('additional_id')->nullable();
            $table->string('no_cust', 8)->nullable();

            // differents
            // 1
            $table->string('sd1', 5)->nullable();
            $table->string('sg1', 5)->nullable();
            $table->string('association_no1', 5)->nullable();
            $table->string('status1', 1)->nullable();
            $table->date('validity_from1')->nullable();
            $table->date('validity_to1')->nullable();
            $table->string('central_regu1', 1)->nullable();
            $table->string('conditions1', 50)->nullable();
            // 2
            $table->string('sd2', 5)->nullable();
            $table->string('sg2', 5)->nullable();
            $table->string('association_no2', 5)->nullable();
            $table->string('status2', 1)->nullable();
            $table->date('validity_from2')->nullable();
            $table->date('validity_to2')->nullable();
            $table->string('central_regu2', 1)->nullable();
            $table->string('conditions2', 50)->nullable();
            // 3
            $table->string('sd3', 5)->nullable();
            $table->string('sg3', 5)->nullable();
            $table->string('association_no3', 5)->nullable();
            $table->string('status3', 1)->nullable();
            $table->date('validity_from3')->nullable();
            $table->date('validity_to3')->nullable();
            $table->string('central_regu3', 1)->nullable();
            $table->string('conditions3', 50)->nullable();





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
        Schema::dropIfExists('kd11');
    }
}
