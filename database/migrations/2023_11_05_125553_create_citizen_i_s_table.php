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
        Schema::create('citizen_i_s', function (Blueprint $table) {
            $table->id();
            $table->string('cid')->nullable();
            $table->string('bday')->nullable();
            $table->string('p_birth')->nullable();
            $table->string('m_status')->nullable();
            $table->string('gender')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('religion')->nullable();
            $table->string('ph')->nullable();
            $table->string('sc_ass')->nullable();
            $table->string('other_gov')->nullable();
            $table->string('camp_travel')->nullable();
            $table->string('region')->nullable();
            $table->string('ethic_org')->nullable();
            $table->string('province')->nullable();
            $table->string('city_mun')->nullable();
            $table->string('brgy')->nullable();
            $table->string('house_purok')->nullable();
            $table->string('street')->nullable();
            $table->string('lang_spoke')->nullable();
            $table->string('osca_idnum')->nullable();
            $table->string('gsis_sss')->nullable();
            $table->string('tin')->nullable();
            $table->string('sbe')->nullable();
            $table->string('curr_pension')->nullable();
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
        Schema::dropIfExists('citizen_i_s');
    }
};
