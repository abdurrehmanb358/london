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
        Schema::create('insurance_inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('costomer_name');
            $table->string('CNIC')->unique();
            $table->date('data_of_birth');
            $table->string('father_name');
            $table->string('Mobile_number');
            $table->string('Email')->unique();
            $table->string('Gender');
            $table->string('purppose_of_vist');
            $table->text('adress');
            $table->string('passport')->nullable();
            $table->string('price')->nullable();
            $table->date('Depature_date');
            $table->string('select_country_travel');
            $table->string('airline');
            $table->integer('number_of_passengers');
            $table->string('class');
            $table->string('beneficiary_name');
            $table->string('beneficiary_relation');
            $table->string('beneficiary_CNIC')->nullable();
            $table->string('beneficiary_phone');
            $table->text('beneficiary_adress');
            $table->string('insurance_Id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurance_inquiries');
    }
};




