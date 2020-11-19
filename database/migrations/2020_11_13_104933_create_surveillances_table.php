<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveillancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveillances', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_of_vehicle');
            $table->string('license_plate')->unique();
            $table->string('model');
            $table->string('color');
            $table->string('owner');
            $table->string('phone_no');
            $table->string('reason');
            $table->string('priority');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveillances');
    }
}
