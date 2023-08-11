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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('images');
            $table->string('flying_from');
            $table->string('flying_to');
            $table->decimal('price', 8, 2);
            $table->string('type');
            $table->string('trip_type')->nullable()->after('type');
            $table->date('departing');
            $table->date('returning');
            $table->string('class');
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
      
    }
};
