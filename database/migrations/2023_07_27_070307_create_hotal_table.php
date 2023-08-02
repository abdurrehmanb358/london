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
            $table->string('destination');
            $table->string('check _in');
            $table->string('check_out');
      
            $table->unsignedInteger('adults');
            $table->unsignedInteger('children');
            $table->unsignedInteger(' childeren age');
            $table->timestamps();
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
