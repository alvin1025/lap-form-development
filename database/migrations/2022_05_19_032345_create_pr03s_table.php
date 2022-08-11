<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePr03sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pr03s', function (Blueprint $table) {
            $table->id();
            $table->string('coll', 10)->nullable();
            $table->string('pricegrp', 5)->nullable();
            $table->string('serno', 5)->nullable();
            $table->date('validity_from')->nullable();
            $table->date('up_to')->nullable();
            $table->string('resp', 20)->nullable();
            $table->string('currency', 5)->nullable();
            $table->string('rate1', 20)->nullable();
            $table->string('rate2', 20)->nullable();
            $table->string('price_unit', 5)->nullable();
            $table->string('min_qty_surcharge', 20)->nullable();
            $table->string('upto_qty_surcharge', 20)->nullable();
            $table->string('qu', 5)->nullable();
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
        Schema::dropIfExists('pr03s');
    }
}
