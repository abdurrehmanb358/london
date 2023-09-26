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
        Schema::create('holiday_inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('pTravFrom');
            $table->string('pStarDate');
            $table->string('pEndDate');
            $table->string('adults');
            $table->string('children');
            $table->string('infants');
            $table->string('passName');
            $table->string('pEmail');
            $table->string('Contnumber');
            $table->string('description');
            $table->string('holidayId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('holiday_inquiries');
    }
};
