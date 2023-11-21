<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizen_bcks', function (Blueprint $table) {
            $table->id();
            $table->string('cid')->nullable();
            $table->string('living_reside')->nullable()->default(',,,,,,,,,');
            $table->string('house_cond')->nullable()->default(',,,,,,');
            $table->string('source_inass')->nullable()->default(',,,,,,,,,,,');
            $table->string('assreal_immov')->nullable()->default(',,,,,');
            $table->string('assr_permov')->nullable()->default(',,,,,,,,');
            $table->string('month_inc')->nullable()->default(',,,,,,,,');
            $table->string('prob_needs')->nullable()->default(',,,,,,,,');
            $table->string('med_concern')->nullable()->default(',,,,,,,,,,');
            $table->string('den_conern')->nullable()->default(',');
            $table->string('optical')->nullable()->default(',,');
            $table->string('hearing')->nullable()->default(',');
            $table->string('soc_emo')->nullable()->default(',,,,,');
            $table->string('area_diff')->nullable()->default(',,,');
            $table->string('med_main')->nullable()->default(',,,,,,,,,,,');
            $table->string('med_sched')->nullable();
            $table->string('med_schedyes')->nullable();
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
        Schema::dropIfExists('citizen_bcks');
    }
};
