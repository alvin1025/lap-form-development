<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormDevSales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_dev_sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_request_development_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('no')->nullable();
            $table->date('date')->nullable();
            $table->string('name')->nullable();
            $table->string('customer')->nullable();
            $table->string('opportunity_order')->nullable();
            $table->date('target_date')->nullable();
            $table->string('purpose')->nullable();
            $table->string('article_code')->nullable();
            $table->string('width')->nullable();
            $table->string('width_value')->nullable();
            $table->string('sample')->nullable();
            $table->string('handfeel_target')->nullable();
            $table->string('end_use')->nullable();
            $table->string('request_design')->nullable();
            $table->string('request_color')->nullable();
            $table->string('special_finish')->nullable();
            $table->string('shrinkage')->nullable();
            $table->string('sample_needed1')->nullable();
            $table->string('sample_needed2')->nullable();
            $table->string('sample_needed_value')->nullable();
            $table->string('status')->nullable();
            $table->string('note')->nullable();
            $table->string('request_by')->nullable();
            $table->string('acknowledged')->nullable();
            $table->string('checked_by')->nullable();
            $table->string('approved_by')->nullable();
            $table->timestamp('publish_at')->nullable();
            $table->timestamp('update_at')->nullable();
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
        Schema::dropIfExists('form_dev_sales');
    }
}
