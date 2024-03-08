<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanceClassesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('dance_classes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age_requirement');
            $table->string('dance_style');
            $table->string('day_of_week');
            $table->string('time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('dance_classes');
    }
};
