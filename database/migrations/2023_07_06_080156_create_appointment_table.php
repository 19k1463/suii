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
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->references('id')->on('doctor'); 
            $table->foreignId('patient_id')->references('id')->on('patient');
            $table->foreignId('assistant_id')->references('id')->on('assistant');
            $table->date('date');
            $table->string('notes');
            $table->string('type');
            $table->float('bill');
            $table->dateTime('appointment_start_time');
            $table->dateTime('appointment_end_time');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
