<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssiociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assiociations', function (Blueprint $table) {
            $table->id();
            $table->string('title', 20)->nullable();
            $table->string('no_cust', 50)->nullable();
            $table->string('name', 60)->nullable();
            $table->string('shortname', 30)->nullable();
            $table->string('street')->nullable();
            $table->string('additional')->nullable();
            $table->string('tax', 30)->nullable();
            $table->string('postal', 30)->nullable();
            $table->string('country_code', 30)->nullable();
            $table->string('kota', 50)->nullable();
            $table->string('fax', 50)->nullable();
            $table->string('pobox', 50)->nullable();
            $table->string('email', 60)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('assoc', 50)->nullable();
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
        Schema::dropIfExists('assiociations');
    }
}
