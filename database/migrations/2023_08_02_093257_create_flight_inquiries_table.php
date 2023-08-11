
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('destination');
            $table->string('form');
            $table->dateTime('date_of_departure');
            $table->dateTime('date_of_arrival');
            $table->string('airline');
            $table->unsignedInteger('number_of_passenger');
            $table->string('class');
            $table->text('message');
            $table->timestamps(); // This will automatically create 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_inquiries');
    }
}