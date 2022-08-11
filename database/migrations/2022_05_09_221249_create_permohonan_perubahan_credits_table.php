<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanPerubahanCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_perubahan_credits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('permintaan_input_cust_id')->nullable();
            $table->string('jenis_cust');
            $table->string('kode_cust');
            $table->string('no_cust')->nullable();
            $table->string('nama_cust');
            $table->string('contact_person');
            $table->text('alamat');
            $table->text('perubahan_alamat');
            $table->string('no_telp');
            $table->string('fax');
            $table->string('jenis_bisnis');
            $table->string('bidang');
            $table->string('orientasi_market');
            $table->string('type_perusahaan');
            $table->string('kepemilikan');
            $table->string('jenis_kepemilikan');
            $table->string('lama_bisnis');
            $table->string('omzet');
            $table->string('credit_limit');
            $table->string('credit_limit_berubah');
            $table->string('credit_term');
            $table->string('credit_term_berubah');
            $table->string('cara_pembayaran');
            $table->string('lama_bekerja_dengan_lpa');
            $table->string('bank_koresponden1');
            $table->string('bank_koresponden2');
            $table->string('data_cust1')->nullable();
            $table->string('data_cust2')->nullable();
            $table->string('data_cust3')->nullable();
            $table->string('data_cust4')->nullable();
            $table->string('data_cust5')->nullable();
            $table->string('data_supp1')->nullable();
            $table->string('data_supp2')->nullable();
            $table->string('data_supp3')->nullable();
            $table->string('data_supp4')->nullable();
            $table->string('data_supp5')->nullable();
            $table->string('customer_class')->nullable();
            $table->string('alasan_perubahan');
            $table->string('history_pembayaran');
            $table->date('tanggal');
            $table->string('dibuat_oleh')->nullable();
            $table->string('mengetahui')->nullable();
            $table->string('disetujui')->nullable();
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
        Schema::dropIfExists('permohonan_perubahan_credits');
    }
}
