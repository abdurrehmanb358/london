<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();

            $table->string('flying_from');
            $table->string('flying_to');
            $table->string('price', 10); // 10 characters (8 digits + 2 decimal places + 1 decimal point)

            $table->string('type');

            $table->dateTime('departing');
            $table->dateTime('returning');
        
           
            $table->string('class');
                       $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('flights');
       }

};