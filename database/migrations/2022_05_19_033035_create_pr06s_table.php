<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePr06sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pr06s', function (Blueprint $table) {
            $table->id();
            $table->string('coll', 10)->nullable();
            $table->string('pricegrp', 5)->nullable();
            $table->string('serno', 5)->nullable();
            $table->string('article', 20)->nullable();
            $table->string('surkd', 20)->nullable();
            $table->string('surcharge_no', 20)->nullable();
            $table->string('surch_red', 20)->nullable();

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
        Schema::dropIfExists('pr06s');
    }
}
