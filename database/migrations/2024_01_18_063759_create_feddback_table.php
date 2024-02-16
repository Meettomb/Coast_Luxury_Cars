<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeddbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feddback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('Your_Name');
            $table->String('Location');
            $table->String('Email_Id');
            $table->String('Phone');
            $table->String('Message');
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
        Schema::dropIfExists('feddback');
    }
}
