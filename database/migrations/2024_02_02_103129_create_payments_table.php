<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('Full_Name');
            $table->String('Email_Id');
            $table->String('Address');
            $table->String('City');
            $table->String('State');
            $table->String('Zip');
            $table->String('Car_Name');
            $table->String('Price');
            $table->String('Price_Words');

            $table->String('Engine');
            $table->String('Top_Speed');
            $table->String('Fuel');
            $table->String('Brand_Name');
            $table->String('Vehicle_Type');
            $table->String('Doors');
            $table->String('Seating_Capacity');
            $table->String('Manufacturing_Year');

            $table->String('Card_Holder_Name');
            $table->String('Card_Number');
            $table->String('Exp_Month');
            $table->String('Exp_Year');
            $table->String('Cvv');
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
        Schema::dropIfExists('payments');
    }
}
