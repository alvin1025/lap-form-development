<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevReportQards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dev_report_qards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_request_development_id')->nullable();
            $table->foreignId('form_dev_sales_id')->nullable();
            $table->foreignId('ws03_id')->nullable();
            $table->foreignId('ws05_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->date('delivery_time')->nullable();
            $table->date('tgl_selesai_report')->nullable();
            $table->string('index')->nullable();
            $table->date('tgl_selesai_proses')->nullable();
            $table->string('article_greige')->nullable();
            $table->string('article_finish')->nullable();
            $table->string('quality')->nullable();
            $table->string('costruction_no_benang')->nullable();
            $table->string('costruction_tetal')->nullable();
            $table->float('finish_width')->nullable();
            $table->float('qty')->nullable();
            $table->string('f_method')->nullable();
            $table->string('weave')->nullable();
            $table->float('width_greige')->nullable();
            $table->string('supplier')->nullable();
            $table->string('customer')->nullable();
            $table->string('purpose')->nullable();
            $table->string('marketing_sales')->nullable();
            $table->string('target_quality')->nullable();
            $table->string('greige_construction')->nullable();
            $table->float('greige_width')->nullable();
            $table->float('greige_weight_1')->nullable();
            $table->float('greige_weight_2')->nullable();
            $table->float('greige_weight_3')->nullable();
            $table->float('greige_weight_avg')->nullable();
            $table->float('greige_tensile_lusi_1')->nullable();
            $table->float('greige_tensile_lusi_2')->nullable();
            $table->float('greige_tensile_lusi_3')->nullable();
            $table->float('greige_tensile_lusi_avg')->nullable();
            $table->float('greige_tensile_pakan_1')->nullable();
            $table->float('greige_tensile_pakan_2')->nullable();
            $table->float('greige_tensile_pakan_3')->nullable();
            $table->float('greige_tensile_pakan_avg')->nullable();
            $table->float('greige_tearing_lusi_1')->nullable();
            $table->float('greige_tearing_lusi_2')->nullable();
            $table->float('greige_tearing_lusi_3')->nullable();
            $table->float('greige_tearing_lusi_avg')->nullable();
            $table->float('greige_tearing_pakan_1')->nullable();
            $table->float('greige_tearing_pakan_2')->nullable();
            $table->float('greige_tearing_pakan_3')->nullable();
            $table->float('greige_tearing_pakan_avg')->nullable();

            // pfd opt 1
            $table->string('pfd_construction')->nullable();
            $table->float('pfd_width')->nullable();
            $table->float('pfd_weight_1')->nullable();
            $table->float('pfd_weight_2')->nullable();
            $table->float('pfd_weight_3')->nullable();
            $table->float('pfd_tensile_lusi_1')->nullable();
            $table->float('pfd_tensile_lusi_2')->nullable();
            $table->float('pfd_tensile_lusi_3')->nullable();
            $table->float('pfd_tensile_pakan_1')->nullable();
            $table->float('pfd_tensile_pakan_2')->nullable();
            $table->float('pfd_tensile_pakan_3')->nullable();
            $table->float('pfd_tearing_lusi_1')->nullable();
            $table->float('pfd_tearing_lusi_2')->nullable();
            $table->float('pfd_tearing_lusi_3')->nullable();
            $table->float('pfd_tearing_pakan_1')->nullable();
            $table->float('pfd_tearing_pakan_2')->nullable();
            $table->float('pfd_tearing_pakan_3')->nullable();
            $table->float('pfd_shrinkage_lusi_1')->nullable();
            $table->float('pfd_shrinkage_lusi_2')->nullable();
            $table->float('pfd_shrinkage_lusi_3')->nullable();
            $table->float('pfd_shrinkage_pakan_1')->nullable();
            $table->float('pfd_shrinkage_pakan_2')->nullable();
            $table->float('pfd_shrinkage_pakan_3')->nullable();
            $table->float('pfd_lebar_after_shrinkage')->nullable();
            $table->float('pfd_stretch')->nullable();
            $table->float('pfd_pilling_resistance')->nullable();
            // pfd opt2
            $table->string('pfd_construction_opt2')->nullable();
            $table->float('pfd_width_opt2')->nullable();
            $table->float('pfd_weight_1_opt2')->nullable();
            $table->float('pfd_weight_2_opt2')->nullable();
            $table->float('pfd_weight_3_opt2')->nullable();
            $table->float('pfd_tensile_lusi_1_opt2')->nullable();
            $table->float('pfd_tensile_lusi_2_opt2')->nullable();
            $table->float('pfd_tensile_lusi_3_opt2')->nullable();
            $table->float('pfd_tensile_pakan_1_opt2')->nullable();
            $table->float('pfd_tensile_pakan_2_opt2')->nullable();
            $table->float('pfd_tensile_pakan_3_opt2')->nullable();
            $table->float('pfd_tearing_lusi_1_opt2')->nullable();
            $table->float('pfd_tearing_lusi_2_opt2')->nullable();
            $table->float('pfd_tearing_lusi_3_opt2')->nullable();
            $table->float('pfd_tearing_pakan_1_opt2')->nullable();
            $table->float('pfd_tearing_pakan_2_opt2')->nullable();
            $table->float('pfd_tearing_pakan_3_opt2')->nullable();
            $table->float('pfd_shrinkage_lusi_1_opt2')->nullable();
            $table->float('pfd_shrinkage_lusi_2_opt2')->nullable();
            $table->float('pfd_shrinkage_lusi_3_opt2')->nullable();
            $table->float('pfd_shrinkage_pakan_1_opt2')->nullable();
            $table->float('pfd_shrinkage_pakan_2_opt2')->nullable();
            $table->float('pfd_shrinkage_pakan_3_opt2')->nullable();
            $table->float('pfd_lebar_after_shrinkage_opt2')->nullable();
            $table->float('pfd_stretch_opt2')->nullable();
            $table->float('pfd_pilling_resistance_opt2')->nullable();
            // pfd option 3
            $table->string('pfd_construction_opt3')->nullable();
            $table->float('pfd_width_opt3')->nullable();
            $table->float('pfd_weight_1_opt3')->nullable();
            $table->float('pfd_weight_2_opt3')->nullable();
            $table->float('pfd_weight_3_opt3')->nullable();
            $table->float('pfd_tensile_lusi_1_opt3')->nullable();
            $table->float('pfd_tensile_lusi_2_opt3')->nullable();
            $table->float('pfd_tensile_lusi_3_opt3')->nullable();
            $table->float('pfd_tensile_pakan_1_opt3')->nullable();
            $table->float('pfd_tensile_pakan_2_opt3')->nullable();
            $table->float('pfd_tensile_pakan_3_opt3')->nullable();
            $table->float('pfd_tearing_lusi_1_opt3')->nullable();
            $table->float('pfd_tearing_lusi_2_opt3')->nullable();
            $table->float('pfd_tearing_lusi_3_opt3')->nullable();
            $table->float('pfd_tearing_pakan_1_opt3')->nullable();
            $table->float('pfd_tearing_pakan_2_opt3')->nullable();
            $table->float('pfd_tearing_pakan_3_opt3')->nullable();
            $table->float('pfd_shrinkage_lusi_1_opt3')->nullable();
            $table->float('pfd_shrinkage_lusi_2_opt3')->nullable();
            $table->float('pfd_shrinkage_lusi_3_opt3')->nullable();
            $table->float('pfd_shrinkage_pakan_1_opt3')->nullable();
            $table->float('pfd_shrinkage_pakan_2_opt3')->nullable();
            $table->float('pfd_shrinkage_pakan_3_opt3')->nullable();
            $table->float('pfd_lebar_after_shrinkage_opt3')->nullable();
            $table->float('pfd_stretch_opt3')->nullable();
            $table->float('pfd_pilling_resistance_opt3')->nullable();


            $table->string('finish_construction')->nullable();
            $table->float('finish_width_finish')->nullable();
            $table->float('finish_weight_1')->nullable();
            $table->float('finish_weight_2')->nullable();
            $table->float('finish_weight_3')->nullable();
            $table->float('finish_weight_avg')->nullable();
            $table->float('finish_tensile_lusi_1')->nullable();
            $table->float('finish_tensile_lusi_2')->nullable();
            $table->float('finish_tensile_lusi_3')->nullable();
            $table->float('finish_tensile_lusi_avg')->nullable();
            $table->float('finish_tensile_pakan_1')->nullable();
            $table->float('finish_tensile_pakan_2')->nullable();
            $table->float('finish_tensile_pakan_3')->nullable();
            $table->float('finish_tensile_pakan_avg')->nullable();
            $table->float('finish_tearing_lusi_1')->nullable();
            $table->float('finish_tearing_lusi_2')->nullable();
            $table->float('finish_tearing_lusi_3')->nullable();
            $table->float('finish_tearing_lusi_avg')->nullable();
            $table->float('finish_tearing_pakan_1')->nullable();
            $table->float('finish_tearing_pakan_2')->nullable();
            $table->float('finish_tearing_pakan_3')->nullable();
            $table->float('finish_tearing_pakan_avg')->nullable();
            $table->float('finish_slippage')->nullable();
            $table->float('finish_shringkage_lusi_1')->nullable();
            $table->float('finish_shringkage_lusi_2')->nullable();
            $table->float('finish_shringkage_lusi_3')->nullable();
            $table->float('finish_shringkage_lusi_avg')->nullable();
            $table->float('finish_shringkage_pakan_1')->nullable();
            $table->float('finish_shringkage_pakan_2')->nullable();
            $table->float('finish_shringkage_pakan_3')->nullable();
            $table->float('finish_lebar_after_shrinkage')->nullable();
            $table->float('finish_stretch')->nullable();
            $table->float('finish_pilling_resistance')->nullable();
            // finish opt 2
            $table->string('finish_construction_opt2')->nullable();
            $table->float('finish_width_finish_opt2')->nullable();
            $table->float('finish_weight_1_opt2')->nullable();
            $table->float('finish_weight_2_opt2')->nullable();
            $table->float('finish_weight_3_opt2')->nullable();
            $table->float('finish_weight_avg_opt2')->nullable();
            $table->float('finish_tensile_lusi_1_opt2')->nullable();
            $table->float('finish_tensile_lusi_2_opt2')->nullable();
            $table->float('finish_tensile_lusi_3_opt2')->nullable();
            $table->float('finish_tensile_lusi_avg_opt2')->nullable();
            $table->float('finish_tensile_pakan_1_opt2')->nullable();
            $table->float('finish_tensile_pakan_2_opt2')->nullable();
            $table->float('finish_tensile_pakan_3_opt2')->nullable();
            $table->float('finish_tensile_pakan_avg_opt2')->nullable();
            $table->float('finish_tearing_lusi_1_opt2')->nullable();
            $table->float('finish_tearing_lusi_2_opt2')->nullable();
            $table->float('finish_tearing_lusi_3_opt2')->nullable();
            $table->float('finish_tearing_lusi_avg_opt2')->nullable();
            $table->float('finish_tearing_pakan_1_opt2')->nullable();
            $table->float('finish_tearing_pakan_2_opt2')->nullable();
            $table->float('finish_tearing_pakan_3_opt2')->nullable();
            $table->float('finish_tearing_pakan_avg_opt2')->nullable();
            $table->float('finish_slippage_opt2')->nullable();
            $table->float('finish_shringkage_lusi_1_opt2')->nullable();
            $table->float('finish_shringkage_lusi_2_opt2')->nullable();
            $table->float('finish_shringkage_lusi_3_opt2')->nullable();
            $table->float('finish_shringkage_lusi_avg_opt2')->nullable();
            $table->float('finish_shringkage_pakan_1_opt2')->nullable();
            $table->float('finish_shringkage_pakan_2_opt2')->nullable();
            $table->float('finish_shringkage_pakan_3_opt2')->nullable();
            $table->float('finish_lebar_after_shrinkage_opt2')->nullable();
            $table->float('finish_stretch_opt2')->nullable();
            // finish opt3
            $table->string('finish_construction_opt3')->nullable();
            $table->float('finish_width_finish_opt3')->nullable();
            $table->float('finish_weight_1_opt3')->nullable();
            $table->float('finish_weight_2_opt3')->nullable();
            $table->float('finish_weight_3_opt3')->nullable();
            $table->float('finish_weight_avg_opt3')->nullable();
            $table->float('finish_tensile_lusi_1_opt3')->nullable();
            $table->float('finish_tensile_lusi_2_opt3')->nullable();
            $table->float('finish_tensile_lusi_3_opt3')->nullable();
            $table->float('finish_tensile_lusi_avg_opt3')->nullable();
            $table->float('finish_tensile_pakan_1_opt3')->nullable();
            $table->float('finish_tensile_pakan_2_opt3')->nullable();
            $table->float('finish_tensile_pakan_3_opt3')->nullable();
            $table->float('finish_tensile_pakan_avg_opt3')->nullable();
            $table->float('finish_tearing_lusi_1_opt3')->nullable();
            $table->float('finish_tearing_lusi_2_opt3')->nullable();
            $table->float('finish_tearing_lusi_3_opt3')->nullable();
            $table->float('finish_tearing_lusi_avg_opt3')->nullable();
            $table->float('finish_tearing_pakan_1_opt3')->nullable();
            $table->float('finish_tearing_pakan_2_opt3')->nullable();
            $table->float('finish_tearing_pakan_3_opt3')->nullable();
            $table->float('finish_tearing_pakan_avg_opt3')->nullable();
            $table->float('finish_slippage_opt3')->nullable();
            $table->float('finish_shringkage_lusi_1_opt3')->nullable();
            $table->float('finish_shringkage_lusi_2_opt3')->nullable();
            $table->float('finish_shringkage_lusi_3_opt3')->nullable();
            $table->float('finish_shringkage_lusi_avg_opt3')->nullable();
            $table->float('finish_shringkage_pakan_1_opt3')->nullable();
            $table->float('finish_shringkage_pakan_2_opt3')->nullable();
            $table->float('finish_shringkage_pakan_3_opt3')->nullable();
            $table->float('finish_lebar_after_shrinkage_opt3')->nullable();
            $table->float('finish_stretch_opt3')->nullable();
            // finish opt 4
            $table->string('finish_construction_opt4')->nullable();
            $table->float('finish_width_finish_opt4')->nullable();
            $table->float('finish_weight_1_opt4')->nullable();
            $table->float('finish_weight_2_opt4')->nullable();
            $table->float('finish_weight_3_opt4')->nullable();
            $table->float('finish_weight_avg_opt4')->nullable();
            $table->float('finish_tensile_lusi_1_opt4')->nullable();
            $table->float('finish_tensile_lusi_2_opt4')->nullable();
            $table->float('finish_tensile_lusi_3_opt4')->nullable();
            $table->float('finish_tensile_lusi_avg_opt4')->nullable();
            $table->float('finish_tensile_pakan_1_opt4')->nullable();
            $table->float('finish_tensile_pakan_2_opt4')->nullable();
            $table->float('finish_tensile_pakan_3_opt4')->nullable();
            $table->float('finish_tensile_pakan_avg_opt4')->nullable();
            $table->float('finish_tearing_lusi_1_opt4')->nullable();
            $table->float('finish_tearing_lusi_2_opt4')->nullable();
            $table->float('finish_tearing_lusi_3_opt4')->nullable();
            $table->float('finish_tearing_lusi_avg_opt4')->nullable();
            $table->float('finish_tearing_pakan_1_opt4')->nullable();
            $table->float('finish_tearing_pakan_2_opt4')->nullable();
            $table->float('finish_tearing_pakan_3_opt4')->nullable();
            $table->float('finish_tearing_pakan_avg_opt4')->nullable();
            $table->float('finish_slippage_opt4')->nullable();
            $table->float('finish_shringkage_lusi_1_opt4')->nullable();
            $table->float('finish_shringkage_lusi_2_opt4')->nullable();
            $table->float('finish_shringkage_lusi_3_opt4')->nullable();
            $table->float('finish_shringkage_lusi_avg_opt4')->nullable();
            $table->float('finish_shringkage_pakan_1_opt4')->nullable();
            $table->float('finish_shringkage_pakan_2_opt4')->nullable();
            $table->float('finish_shringkage_pakan_3_opt4')->nullable();
            $table->float('finish_lebar_after_shrinkage_opt4')->nullable();
            $table->float('finish_stretch_opt4')->nullable();

            $table->float('grey_construction_fix')->nullable();
            $table->float('grey_width_fix')->nullable();
            $table->float('grey_weight_fix')->nullable();
            $table->float('grey_tensile_lusi_fix')->nullable();
            $table->float('grey_tensile_pakan_fix')->nullable();
            $table->float('grey_tearing_lusi_fix')->nullable();
            $table->float('grey_tearing_pakan_fix')->nullable();
            $table->string('pfp_construction_fix')->nullable();
            $table->float('pfp_width_fix')->nullable();
            $table->float('pfp_weight_fix')->nullable();
            $table->float('pfp_tensile_lusi_fix')->nullable();
            $table->float('pfp_tensile_pakan_fix')->nullable();
            $table->float('pfp_tearing_lusi_fix')->nullable();
            $table->float('pfp_tearing_pakan_fix')->nullable();
            $table->string('finish_construction_fix')->nullable();
            $table->float('finish_width_fix')->nullable();
            $table->float('finish_weight_fix')->nullable();
            $table->float('finish_tensile_lusi_fix')->nullable();
            $table->float('finish_tensile_pakan_fix')->nullable();
            $table->float('finish_tearing_lusi_fix')->nullable();
            $table->float('finish_tearing_pakan_fix')->nullable();
            $table->float('finish_slippage_fix')->nullable();
            $table->float('finish_shrinkage_lusi_fix')->nullable();
            $table->float('finish_shrinkage_pakan_fix')->nullable();
            $table->float('finish_n-wdt')->nullable();
            $table->float('finish_none')->nullable();
            $table->float('finish_stretch_fix')->nullable();
            $table->float('finish_skewing_bowing')->nullable();
            $table->string('comment1')->nullable();
            $table->string('comment2')->nullable();
            $table->string('comment3')->nullable();
            $table->string('comment4')->nullable();
            $table->string('comment5')->nullable();
            $table->string('comment6')->nullable();
            $table->string('comment7')->nullable();
            $table->string('comment8')->nullable();
            $table->string('comment9')->nullable();
            $table->string('comment10')->nullable();
            $table->string('comment11')->nullable();
            $table->string('comment12')->nullable();
            $table->string('comment13')->nullable();
            $table->string('comment14')->nullable();
            $table->string('comment15')->nullable();
            $table->string('comment16')->nullable();
            $table->string('comment17')->nullable();
            $table->string('comment18')->nullable();
            $table->string('comment19')->nullable();
            $table->string('comment20')->nullable();
            $table->string('comment21')->nullable();
            $table->string('comment22')->nullable();
            $table->string('comment23')->nullable();
            $table->string('comment24')->nullable();
            $table->integer('flow_code')->nullable();
            $table->string('note_wid_1')->nullable();
            $table->date('tgl_release')->nullable();
            $table->integer('nots')->nullable();
            $table->string('status_actual_time')->nullable();
            $table->string('status_sistem')->nullable();
            $table->integer('lama_proses')->nullable();
            $table->integer('lama_report')->nullable();
            $table->integer('lama_release')->nullable();
            $table->integer('total_waktu')->nullable();
            $table->string('product_type')->nullable();
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
        Schema::dropIfExists('dev_report_qards');
    }
}