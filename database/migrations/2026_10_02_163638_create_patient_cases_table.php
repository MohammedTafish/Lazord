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
        Schema::create('patient_cases', function (Blueprint $table) {
            $table->id();
            $table->string('dentist_id');
            $table->string('status');
            $table->text('notes')->nullable();

            $table->foreignId('clincs_id')->constrained('clinics')->cascadeOnDelete();
            $table->foreignId('laboratories_id')->constrained('laboratories')->cascadeOnDelete();
            $table->foreignId('patients_id')->constrained('patients')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_cases');
    }
};