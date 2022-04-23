<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWs05sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws05s', function (Blueprint $table) {
            $table->id();
            $table->date('input_date')->nullable();
            $table->string('pic')->nullable();
            $table->string('article_greige')->nullable();
            $table->string('greige_description')->nullable();
            $table->string('composition')->nullable();
            $table->string('article_finish')->nullable();
            $table->string('variant')->nullable();
            $table->string('customer')->nullable();
            $table->float('standar_full_width_ws05')->nullable();
            $table->float('finish_width_from')->nullable();
            $table->float('finish_width_to')->nullable();
            $table->float('fw_inc')->nullable();
            $table->string('fw_label_inc')->nullable();
            $table->float('greige_lusi')->nullable();
            $table->float('greige_pakan')->nullable();
            $table->float('greige_lebar')->nullable();
            $table->float('greige_grm')->nullable();
            $table->float('greige_gsm')->nullable();
            $table->float('greige_ne_lusi')->nullable();
            $table->float('greige_ne_pakan')->nullable();
            $table->float('finish_identity_konstruksi_lusi')->nullable();
            $table->float('finish_identity_konstruksi_pakan')->nullable();
            $table->float('finish_identity_konstruksi_grmt')->nullable();
            $table->float('finish_identity_konstruksi_gsqm')->nullable();
            $table->string('status')->nullable();
            $table->foreignId('user_id')->nullable();
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
        Schema::dropIfExists('ws05s');
    }
}
