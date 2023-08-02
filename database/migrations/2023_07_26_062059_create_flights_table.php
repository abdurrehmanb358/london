<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('flying_form');
            $table->string('flying_to');
            $table->date('departing');
            $table->date('returning');
            $table->integer('adults');
            $table->integer('children');
            $table->integer('infants');
            $table->string('Class');
            $table->string('PreferedAirline')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('flights');
    }
};
