<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_masters', function (Blueprint $table) {
            $table->id();
            $table->string('agent', 5)->nullable();
            $table->string('language', 20)->nullable();
            $table->string('title', 20)->nullable();
            $table->string('shortname', 20)->nullable();
            $table->string('status', 20)->nullable();
            $table->string('agent_kind', 20)->nullable();
            $table->string('name1', 50)->nullable();
            $table->string('name2', 50)->nullable();
            $table->string('addit', 50)->nullable();
            $table->string('street', 50)->nullable();
            $table->string('cocd', 20)->nullable();
            $table->string('cty', 50)->nullable();
            $table->string('pobox', 20)->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('email', 30)->nullable();
            $table->string('mobile', 15)->nullable();
            $table->string('home', 50)->nullable();
            $table->string('fax', 20)->nullable();
            $table->string('kurs', 20)->nullable();
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
        Schema::dropIfExists('agent_masters');
    }
}
