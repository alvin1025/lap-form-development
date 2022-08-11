<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePr04sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pr04s', function (Blueprint $table) {
            $table->id();
            $table->string('coll', 10)->nullable();
            $table->string('pricegrp', 5)->nullable();
            $table->string('serno', 5)->nullable();
            $table->string('article', 20)->nullable();
            $table->string('tariff_code', 10)->nullable();
            $table->string('tariff_quantity', 20)->nullable();
            $table->string('price', 20)->nullable();
            $table->string('surcharge_type', 20)->nullable();
            $table->string('surcharge', 20)->nullable();
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
        Schema::dropIfExists('pr04s');
    }
}
