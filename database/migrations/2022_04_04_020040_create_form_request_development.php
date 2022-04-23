<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormRequestDevelopment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_request_development', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dev_model_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('form_dev_sales_id')->nullable();
            $table->date('date_in')->nullable();
            $table->date('due_date')->nullable();
            $table->string('no')->nullable();
            $table->text('subject')->nullable();
            $table->string('dev_greige')->nullable();
            $table->string('jenis_development1')->nullable();
            $table->string('development1')->nullable();
            $table->string('jenis_development2')->nullable();
            $table->string('development2')->nullable();
            $table->string('solid')->nullable();
            $table->string('quality')->nullable();
            $table->string('special_finish')->nullable();
            $table->string('end_use')->nullable();
            $table->string('note')->nullable();
            $table->string('image')->nullable();
            $table->string('finished_cont')->nullable();
            $table->string('weave_cont')->nullable();
            $table->float('width_cont')->nullable();
            $table->float('shringkage_cont')->nullable();
            $table->float('weight_cont')->nullable();
            $table->float('cutt_width')->nullable();
            $table->string('finishing_cont')->nullable();
            $table->string('greige_contruction')->nullable();
            $table->string('weave_greige')->nullable();
            $table->float('width_greige')->nullable();
            $table->float('weight_greige')->nullable();
            $table->string('yarn_description')->nullable();
            $table->float('yarn_count')->nullable();
            $table->string('ne_denier')->nullable();
            $table->float('weight_yarn')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('publish_at')->nullable();
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
        Schema::dropIfExists('form_request_development');
    }
}
