<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyAccsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('key_accs', function (Blueprint $table) {
            $table->id();
            $table->string('dept', 50)->nullable();
            $table->string('fgrp', 50)->nullable();
            $table->string('mgrp', 50)->nullable();
            $table->string('client', 5)->nullable();
            $table->string('name', 50)->nullable();
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
        Schema::dropIfExists('key_accs');
    }
}
