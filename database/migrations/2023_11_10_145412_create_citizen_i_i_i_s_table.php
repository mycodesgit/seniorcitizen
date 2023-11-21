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
        Schema::create('citizen_i_i_i_s', function (Blueprint $table) {
            $table->id();
            $table->string('cid')->nullable();
            $table->string('educ_attain')->nullable()->default(',,,,,,,,');
            $table->string('share_skill')->nullable()->default(',,');
            $table->string('area_techskill')->nullable()->default(',,,,,,,,,,,,,,,,,,,');
            $table->string('comm_serveinv')->nullable()->default(',,,,,,,,,,,');
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
        Schema::dropIfExists('citizen_i_i_i_s');
    }
};
