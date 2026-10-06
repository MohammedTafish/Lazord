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
        Schema::create('case_files', function (Blueprint $table) {
            $table->id();
            
            $table->string('file_path');    
            $table->string('file_name');    
            $table->string('file_type');   
            $table->string('uploaded_by');
            
            $table->foreignId('cases_id')->constrained('patient_cases')->cascadeOnDelete();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_files');
    }
};