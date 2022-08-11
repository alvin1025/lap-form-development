<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanInputCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_input_customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            // $table->foreignId('title_id');
            // $table->foreignId('class_id');
            // $table->foreignId('negara_id');
            // $table->foreignId('negara_id');
            // kd03 master
            $table->date('tanggal');
            $table->string('class', 5)->nullable();
            $table->string('title', 10)->nullable();
            $table->string('nama', 100)->nullable();
            $table->string('no_cust', 20)->nullable();
            $table->string('kode_cust', 20)->nullable();
            $table->text('alamat')->nullable();
            $table->string('negara', 50)->nullable();
            $table->string('kode_country', 20)->nullable();
            $table->string('kota', 50)->nullable();
            $table->string('email', 50)->nullable();
            // $table->string('email2');
            $table->string('telp', 50)->nullable();
            $table->string('npwp', 50)->nullable();

            // kd06 condition
            $table->string('sd', 5);
            $table->string('biz_type_p1', 5);
            $table->string('nama_agent', 50)->nullable();
            $table->string('kode_brand1', 50)->nullable();
            $table->string('kode_brand2', 50)->nullable();
            $table->string('kode_brand3', 50)->nullable();
            $table->text('long_desc1')->nullable();
            $table->text('long_desc2')->nullable();
            $table->text('long_desc3')->nullable();
            $table->string('negara1', 50)->nullable();
            $table->string('negara2', 50)->nullable();
            $table->string('negara3', 50)->nullable();
            $table->integer('allowance_qty', 5)->nullable();
            $table->string('tax', 10)->nullable();
            $table->string('assigment', 10)->nullable();
            $table->string('del_con', 10)->nullable();
            $table->string('kurs', 10)->nullable();
            $table->string('satuan', 10)->nullable();
            $table->string('sales', 50)->nullable();
            $table->string('association1', 100)->nullable();
            $table->string('association2', 100)->nullable();
            $table->string('association3', 100)->nullable();
            $table->float('fcmlama_digital')->nullable();
            $table->float('fcmlama_dyed')->nullable();
            $table->float('fcmlama_print')->nullable();
            $table->float('fcmlama_white')->nullable();
            $table->float('fcmbaru_digital')->nullable();
            $table->float('fcmbaru_dyed')->nullable();
            $table->float('fcmbaru_print')->nullable();
            $table->float('fcmbaru_white')->nullable();
            $table->string('table_price', 10)->nullable();
            $table->string('packing', 50)->nullable();
            $table->string('cutting', 50)->nullable();
            $table->string('standart_sample', 50)->nullable();

            //untuk finance
            $table->string('credit_limit', 100)->nullable();
            $table->string('payterm', 50)->nullable();
            $table->string('alasan_perubahan')->nullable();
            $table->string('history_pembayaran')->nullable();

            //kd14 pic/contact person
            $table->string('title1', 100)->nullable();
            $table->string('title2', 100)->nullable();
            $table->string('title3', 100)->nullable();
            $table->string('nama_cp1', 100)->nullable();
            $table->string('nama_cp2', 100)->nullable();
            $table->string('nama_cp3', 100)->nullable();
            $table->string('jabatan_cp1', 100)->nullable();
            $table->string('jabatan_cp2', 100)->nullable();
            $table->string('jabatan_cp3', 100)->nullable();
            $table->string('phone_cp1', 100)->nullable();
            $table->string('phone_cp2', 100)->nullable();
            $table->string('phone_cp3', 100)->nullable();
            $table->string('email_cp1', 100)->nullable();
            $table->string('email_cp2', 100)->nullable();
            $table->string('email_cp3', 100)->nullable();

            // kd05
            $table->string('kd5_title1', 10)->nullable();
            $table->string('kd5_class1', 5)->nullable();
            $table->string('kd5_no_cust1', 20)->nullable();
            $table->string('kd5_kode_cust1', 20)->nullable();
            $table->string('kd5_nama1', 100)->nullable();
            $table->text('kd5_alamat1')->nullable();
            $table->string('kd5_negara1', 50)->nullable();
            $table->string('kd5_kode_country1', 20)->nullable();
            $table->string('kd5_kota1', 50)->nullable();
            $table->string('kd5_email1', 50)->nullable();
            $table->string('kd5_telp1', 50)->nullable();
            $table->string('kd5_npwp1', 50)->nullable();

            $table->string('kd5_title2', 10)->nullable();
            $table->string('kd5_class2', 5)->nullable();
            $table->string('kd05_no_cust2', 20)->nullable();
            $table->string('kd05_kode_cust2', 20)->nullable();
            $table->string('kd5_nama2', 100)->nullable();
            $table->text('kd5_alamat2')->nullable();
            $table->string('kd5_negara2', 50)->nullable();
            $table->string('kd5_kode_country2', 20)->nullable();
            $table->string('kd5_kota2', 50)->nullable();
            $table->string('kd5_email2', 50)->nullable();
            $table->string('kd5_telp2', 50)->nullable();
            $table->string('kd5_npwp2', 50)->nullable();

            $table->string('kd5_title3', 10)->nullable();
            $table->string('kd5_class3', 5)->nullable();
            $table->string('kd5_no_cust3', 20)->nullable();
            $table->string('kd5_kode_cust3', 20)->nullable();
            $table->string('kd5_nama3', 100)->nullable();
            $table->text('kd5_alamat3')->nullable();
            $table->string('kd5_negara3', 50)->nullable();
            $table->string('kd5_kode_country3', 20)->nullable();
            $table->string('kd5_kota3', 50)->nullable();
            $table->string('kd5_email3', 50)->nullable();
            $table->string('kd5_telp3', 50)->nullable();
            $table->string('kd5_npwp3', 50)->nullable();

            $table->text('add_perubahan_alamat')->nullable();
            $table->string('add_fax', 15)->nullable();
            $table->string('add_bidang', 30)->nullable();
            $table->string('add_jenis_bisnis', 50)->nullable();
            $table->string('add_orientasi_bisnis', 50)->nullable();
            $table->string('add_type_perusahaan', 50)->nullable();
            $table->string('add_kepemilikan', 15)->nullable();
            $table->string('add_jenis_kepemilikan', 50)->nullable();
            $table->string('add_lama_bisnis', 10)->nullable();
            $table->string('add_credit_limit_request', 50)->nullable();
            $table->string('add_credit_term_request', 50)->nullable();
            $table->string('add_cara_pembayaran', 10)->nullable();
            $table->string('add_bank_koresponden1', 20)->nullable();
            $table->string('add_bank_koresponden2', 20)->nullable();
            $table->string('add_kerjasama_lpa', 10)->nullable();
            $table->string('add_cust1', 50)->nullable();
            $table->string('add_cust2', 50)->nullable();
            $table->string('add_cust3', 50)->nullable();
            $table->string('add_cust4', 50)->nullable();
            $table->string('add_cust5', 50)->nullable();
            $table->string('add_sup1', 50)->nullable();
            $table->string('add_sup2', 50)->nullable();
            $table->string('add_sup3', 50)->nullable();
            $table->string('add_sup4', 50)->nullable();
            $table->string('add_sup5', 50)->nullable();
            $table->string('status', 10)->nullable();
            $table->string('status_form', 20)->nullable();
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
        Schema::dropIfExists('permintaan_input_customers');
    }
}
