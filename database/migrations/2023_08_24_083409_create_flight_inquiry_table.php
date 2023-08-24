<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flight_inquiry', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('destination');
            $table->string('form');
            $table->string('dateOfDeparture');
            $table->string('dateOfArival');
            $table->string('airline');
            $table->string('noOfPassenger');
            $table->string('class');
            $table->string('message');
            $table->string('flightId');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_inquiry');
    }
};
