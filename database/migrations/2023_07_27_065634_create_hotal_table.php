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
    Schema::create('hotal', function (Blueprint $table) {
        $table->id();
        $table->string('flying_from');
        $table->string('flying_to');
         $table->unsignedInteger('adults');
        $table->unsignedInteger('children');
       
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotal');
    }
};

