<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kd05 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kd05', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kd06_id')->nullable();
            $table->foreignId('kd04_id')->nullable();
            $table->foreignId('kd11_id')->nullable();
            $table->foreignId('kd14_id')->nullable();
            $table->foreignId('kd05_id')->nullable();
            $table->foreignId('additional_id')->nullable();
            $table->string('no_cust1', 8)->nullable();
            $table->string('no_cust2', 8)->nullable();
            $table->string('no_cust3', 8)->nullable();

            // 1
            $table->string('address_code1', 8)->nullable();
            $table->string('title1', 10)->nullable();
            $table->string('negara1', 50)->nullable();
            $table->string('kode_county1', 20)->nullable();
            $table->string('kota1', 50)->nullable();
            $table->string('email1', 50)->nullable();
            $table->string('telp1', 50)->nullable();
            $table->string('npwp1', 50)->nullable();
            //different
            $table->string('short_name1', 10)->nullable();
            $table->string('nama11', 40)->nullable();
            $table->string('nama21', 40)->nullable();
            $table->string('street1', 50)->nullable();
            $table->string('addit1', 50)->nullable();
            $table->string('postal_code1', 10)->nullable();
            $table->string('po_box1', 20)->nullable();
            $table->string('tax1', 20)->nullable();
            $table->string('mobile1', 50)->nullable();
            $table->string('home1', 50)->nullable();
            $table->string('fax1', 20)->nullable();

            // 2
            $table->string('address_code12', 8)->nullable();
            $table->string('title2', 10)->nullable();
            $table->string('negara2', 50)->nullable();
            $table->string('kode_county2', 20)->nullable();
            $table->string('kota2', 50)->nullable();
            $table->string('email2', 50)->nullable();
            $table->string('telp2', 50)->nullable();
            $table->string('npwp2', 50)->nullable();
            //different
            $table->string('short_name2', 10)->nullable();
            $table->string('nama12', 40)->nullable();
            $table->string('nama22', 40)->nullable();
            $table->string('street2', 50)->nullable();
            $table->string('addit2', 50)->nullable();
            $table->string('postal_code2', 10)->nullable();
            $table->string('po_box2', 20)->nullable();
            $table->string('tax2', 20)->nullable();
            $table->string('mobile2', 50)->nullable();
            $table->string('home2', 50)->nullable();
            $table->string('fax2', 20)->nullable();

            // 3
            $table->string('address_code13', 8)->nullable();
            $table->string('title3', 10)->nullable();
            $table->string('negara3', 50)->nullable();
            $table->string('kode_county3', 20)->nullable();
            $table->string('kota3', 50)->nullable();
            $table->string('email3', 50)->nullable();
            $table->string('telp3', 50)->nullable();
            $table->string('npwp3', 50)->nullable();
            //different
            $table->string('short_name3', 10)->nullable();
            $table->string('nama13', 40)->nullable();
            $table->string('nama23', 40)->nullable();
            $table->string('street3', 50)->nullable();
            $table->string('addit3', 50)->nullable();
            $table->string('postal_code3', 10)->nullable();
            $table->string('po_box3', 20)->nullable();
            $table->string('tax3', 20)->nullable();
            $table->string('mobile3', 50)->nullable();
            $table->string('home3', 50)->nullable();
            $table->string('fax3', 20)->nullable();
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
        Schema::dropIfExists('kd05');
    }
}
