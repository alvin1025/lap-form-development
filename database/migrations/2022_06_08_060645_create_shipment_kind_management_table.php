<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentKindManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment_kind_management', function (Blueprint $table) {
            $table->id();
            $table->string('shki', 30)->nullable();
            $table->string('carr', 30)->nullable();
            $table->string('description', 50)->nullable();
            $table->string('shipment_class', 30)->nullable();
            $table->string('supplier', 30)->nullable();
            $table->string('pack', 30)->nullable();
            $table->string('dispadvgen', 30)->nullable();
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
        Schema::dropIfExists('shipment_kind_management');
    }
}
