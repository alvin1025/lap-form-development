<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKd05ReqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kd05_reqs', function (Blueprint $table) {
            $table->id();
            $table->string('no_cust1', 10);
            $table->string('addresscode1', 10);
            $table->string('title1', 10);
            $table->string('kd5negara1', 50);
            $table->string('kode_county1', 100);
            $table->string('kota1', 50);
            $table->string('email1', 50);
            $table->string('telp1', 20);
            $table->string('npwp1', 30);
            $table->string('short_name1', 10);
            $table->string('nama11', 50);
            $table->string('nama21', 50);
            $table->string('street1');
            $table->string('addit1');
            $table->string('postal_code1', 10);
            $table->string('po_box1', 20);
            $table->string('tax1', 20);
            $table->string('mobile1', 50);
            $table->string('home1', 50);
            $table->string('fax1', 20);
            $table->string('status', 10);
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
        Schema::dropIfExists('kd05_reqs');
    }
}
