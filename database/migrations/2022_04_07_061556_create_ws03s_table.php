<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWs03sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws03s', function (Blueprint $table) {
            $table->id();
            // $table->string('no_1')->nullable();
            $table->string('cust_no')->nullable();
            $table->string('customer')->nullable();
            $table->string('article_no_desc')->nullable();
            $table->string('va')->nullable();
            $table->string('substrat')->nullable();
            $table->float('lgth_ch')->nullable();
            $table->string('f')->nullable();
            $table->string('comment')->nullable();
            $table->string('article_descrip')->nullable();
            $table->float('t_wd')->nullable();
            $table->float('g_rmt')->nullable();
            $table->float('g_sqm')->nullable();
            $table->float('tcwa')->nullable();
            $table->float('tcwe')->nullable();
            $table->string('supplier')->nullable();
            $table->string('new_entr')->nullable();
            $table->string('new_date')->nullable();
            $table->string('no_2')->nullable();
            $table->string('prpla_article')->nullable();
            $table->string('none1')->nullable();
            $table->string('material')->nullable();
            $table->float('finish')->nullable();
            $table->string('from_greige')->nullable();
            $table->string('order')->nullable();
            $table->string('ord_date')->nullable();
            $table->string('none2')->nullable();
            $table->string('sample')->nullable();
            $table->string('mod_user')->nullable();
            $table->string('mod_date')->nullable();
            $table->string('weave_repeat_ke')->nullable();
            $table->string('reedin')->nullable();
            $table->string('prodstar')->nullable();
            $table->string('prodend')->nullable();
            $table->string('s')->nullable();
            $table->string('no_3')->nullable();
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
        Schema::dropIfExists('ws03s');
    }
}
