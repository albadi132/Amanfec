<?php
// database/migrations/2025_08_18_000011_create_job_application_educations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
         if (Schema::hasTable('job_application_educations')) {
            return; // الجدول موجود، تخطَّ الإنشاء
        }
        Schema::create('job_application_educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_application_id')->constrained('job_applications')->cascadeOnDelete();
            $table->string('school')->nullable();
            $table->string('degree')->nullable();      // Degree*
            $table->string('discipline')->nullable();  // Discipline*
            $table->year('end_year')->nullable();      // End date year*
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_application_educations');
    }
};
