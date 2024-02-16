<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpcarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expcars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('F_Img');
            $table->string('B_Img')->nullable();
            $table->string('S_Img')->nullable();
            $table->string('Car_Name');
            $table->string('Brand_Name');
            $table->integer('Price');
            $table->string('Engine_Type');
            $table->string('Top_Speed');
            $table->string('Vehicle_Type');
            $table->integer('Doors');
            $table->integer('Seating_Capacity');
            $table->integer('Manufacturing_Year');
            $table->string('Fuel_Type');
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
        Schema::dropIfExists('expcars');
    }
}
