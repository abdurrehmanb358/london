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
            $table->string('type');
            $table->dateTime('departing');
            $table->dateTime('returning');
            $table->unsignedInteger('adults');
            $table->unsignedInteger('children');
            $table->unsignedInteger('infants');
            $table->string('type');
            $table->string('class');
            $table->string('preferred_airline');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('flights');
       }

};
