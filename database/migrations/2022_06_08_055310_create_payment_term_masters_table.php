<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTermMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_term_masters', function (Blueprint $table) {
            $table->id();
            $table->string('pay_term', 10)->nullable();
            $table->string('language', 20)->nullable();
            $table->string('status', 20)->nullable();
            $table->string('acc_type', 20)->nullable();
            $table->string('description', 50)->nullable();
            $table->string('payment_kind', 20)->nullable();
            $table->string('surcharge', 20)->nullable();
            $table->string('net_day', 20)->nullable();
            $table->string('net_month', 20)->nullable();
            $table->string('pre_intere', 20)->nullable();
            $table->string('def_intere', 20)->nullable();
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
        Schema::dropIfExists('payment_term_masters');
    }
}
