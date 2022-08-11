<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVs04sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vs04s', function (Blueprint $table) {
            $table->id();
            $table->string('agent', 20)->nullable();
            $table->string('cust', 20)->nullable();
            $table->string('sd', 20)->nullable();
            $table->string('fr', 20)->nullable();
            $table->string('qu', 20)->nullable();
            $table->string('ctype', 20)->nullable();
            $table->string('qg', 20)->nullable();
            $table->string('from_quantity', 20)->nullable();
            $table->string('%', 20)->nullable();
            $table->string('Value', 20)->nullable();
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
        Schema::dropIfExists('vs04s');
    }
}
