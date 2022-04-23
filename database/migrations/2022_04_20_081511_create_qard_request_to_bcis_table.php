<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQardRequestToBcisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qard_request_to_bcis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('form_request_development_id')->nullable();
            $table->string('kepada')->nullable();
            $table->string('dari')->nullable();
            $table->string('no')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('fabric')->nullable();
            $table->string('jumlah_sample')->nullable();
            $table->string('identitas')->nullable();
            $table->string('greige_supply')->nullable();
            $table->string('article')->nullable();
            $table->string('weave')->nullable();
            $table->string('greige_width')->nullable();
            $table->string('construction')->nullable();
            $table->string('nomor_benang')->nullable();
            $table->string('twisting')->nullable();
            $table->string('type_twisting')->nullable();
            $table->string('komposisi_serat')->nullable();

            $table->string('lampiran1_identitas')->nullable();
            $table->string('lampiran1_greige_supply')->nullable();
            $table->string('lampiran1_article')->nullable();
            $table->string('lampiran1_weave')->nullable();
            $table->string('lampiran1_construction')->nullable();
            $table->string('lampiran1_greige_width')->nullable();

            $table->string('lampiran2_identitas')->nullable();
            $table->string('lampiran2_greige_supply')->nullable();
            $table->string('lampiran2_article')->nullable();
            $table->string('lampiran2_weave')->nullable();
            $table->string('lampiran2_construction')->nullable();
            $table->string('lampiran2_greige_width')->nullable();

            $table->string('lampiran3_identitas')->nullable();
            $table->string('lampiran3_greige_supply')->nullable();
            $table->string('lampiran3_article')->nullable();
            $table->string('lampiran3_weave')->nullable();
            $table->string('lampiran3_construction')->nullable();
            $table->string('lampiran3_greige_width')->nullable();

            $table->string('lampiran4_identitas')->nullable();
            $table->string('lampiran4_greige_supply')->nullable();
            $table->string('lampiran4_article')->nullable();
            $table->string('lampiran4_weave')->nullable();
            $table->string('lampiran4_construction')->nullable();
            $table->string('lampiran4_greige_width')->nullable();

            $table->string('lampiran5_identitas')->nullable();
            $table->string('lampiran5_greige_supply')->nullable();
            $table->string('lampiran5_article')->nullable();
            $table->string('lampiran5_weave')->nullable();
            $table->string('lampiran5_construction')->nullable();
            $table->string('lampiran5_greige_width')->nullable();

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
        Schema::dropIfExists('qard_request_to_bcis');
    }
}
