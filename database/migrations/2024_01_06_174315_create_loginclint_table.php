<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginclintTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loginclint', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('Full_Name');
            $table->String('Email_Id')->unique();
            $table->String('Phone_Number');
            $table->date('Birth_Date');
            $table->enum('Gender',["Male","Female","Prefer not to say"]);
            $table->String('Password');
            $table->String('Role')->default('user');
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
        Schema::dropIfExists('loginclint');
    }
}
