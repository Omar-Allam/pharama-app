<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ar_name');
            $table->string('active_constituent');
            $table->string('dose');
            $table->integer('type_id');
            $table->integer('company_id');
            $table->double('price');
            $table->binary('image');
            $table->string('capacity');
            $table->string('usage');
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
        Schema::dropIfExists('medicines');
    }
}
