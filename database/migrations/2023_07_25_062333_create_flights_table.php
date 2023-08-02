<?php

// database/migrations/YYYY_MM_DD_HHMMSS_create_flights_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('departure', 255);
            $table->string('destination', 255);
            $table->string('flight_number', 50); // New column: Flight number
            $table->string('airline', 100); // New column: Airline
            $table->dateTime('departure_time'); // New column: Departure time
            $table->dateTime('arrival_time'); // New column: Arrival time
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
        Schema::dropIfExists('flights');
    }
}
