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
        Schema::create('citizen_i_i_s', function (Blueprint $table) {
            $table->id();
            $table->string('cid')->nullable();
            $table->string('spouse_lname')->nullable()->default(',,,');
            $table->string('spouse_fname')->nullable()->default(',,,');
            $table->string('spouse_mname')->nullable()->default(',,,');
            $table->string('spouse_ext')->nullable()->default(',,,');
            $table->string('father_lname')->nullable()->default(',,,');
            $table->string('father_fname')->nullable()->default(',,,');
            $table->string('father_mname')->nullable()->default(',,,');
            $table->string('father_ext')->nullable()->default(',,,');
            $table->string('mother_lname')->nullable()->default(',,,');
            $table->string('mother_fname')->nullable()->default(',,,');
            $table->string('mother_mname')->nullable()->default(',,,');
            $table->string('mother_ext')->nullable()->default(',,,');
            $table->string('child_fname')->nullable()->default(',,,');
            $table->string('child_occup')->nullable()->default(',,,');
            $table->string('child_income')->nullable()->default(',,,');
            $table->string('child_age')->nullable()->default(',,,');
            $table->string('child_working')->nullable()->default(',,,');
            $table->string('depend_fname')->nullable()->default(',,,');
            $table->string('depend_occup')->nullable()->default(',,,');
            $table->string('depend_income')->nullable()->default(',,,');
            $table->string('depend_age')->nullable()->default(',,,');
            $table->string('depend_working')->nullable()->default(',,,');
            $table->rememberToken();
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
        Schema::dropIfExists('citizen_i_i_s');
    }
};
