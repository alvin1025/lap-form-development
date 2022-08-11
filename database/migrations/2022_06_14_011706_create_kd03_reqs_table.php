<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKd03ReqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kd03_reqs', function (Blueprint $table) {
            $table->id();
            $table->string('class', 20)->nullable();
            $table->string('title', 20)->nullable();
            $table->string('no_cust', 20)->nullable();
            $table->string('negara', 20)->nullable();
            $table->string('kode_county', 100)->nullable();
            $table->string('kota', 20)->nullable();
            $table->string('email', 20)->nullable();
            $table->string('telp', 20)->nullable();
            $table->string('npwp', 20)->nullable();
            $table->string('short_name', 20)->nullable();
            $table->string('nama1', 50)->nullable();
            $table->string('nama2', 50)->nullable();
            $table->string('street', 100)->nullable();
            $table->string('addit', 50)->nullable();
            $table->string('postal_code', 50)->nullable();
            $table->string('po_box', 50)->nullable();
            $table->string('tax', 50)->nullable();
            $table->string('mobile', 50)->nullable();
            $table->string('home', 50)->nullable();
            $table->string('fax', 50)->nullable();
            $table->string('status', 50)->nullable();
            $table->string('status_form', 50)->nullable();
            $table->string('created_by', 100)->nullable();
            $table->string('submitted_by', 100)->nullable();
            $table->string('aprv1_by', 100)->nullable();
            $table->string('aprv2_by', 100)->nullable();
            $table->string('inputted_by', 100)->nullable();
            $table->string('rejectted_by', 100)->nullable();
            $table->string('reject_reason')->nullable();
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
        Schema::dropIfExists('kd03_reqs');
    }
}
