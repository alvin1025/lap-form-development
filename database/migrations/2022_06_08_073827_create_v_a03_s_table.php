<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVA03STable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_a03_s', function (Blueprint $table) {
            $table->id();
            $table->string('collecion', 50)->nullable();
            $table->string('description', 50)->nullable();
            $table->string('standar_qu', 50)->nullable();
            $table->string('period_from', 50)->nullable();
            $table->string('period_to', 50)->nullable();
            $table->string('blocked_since', 50)->nullable();
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
        Schema::dropIfExists('v_a03_s');
    }
}
