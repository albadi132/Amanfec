<?php
// database/migrations/2025_08_18_000002_alter_career_jobs_add_fields.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('career_jobs', function (Blueprint $table) {
            // إن لم تكن موجودة مسبقًا:
            if (!Schema::hasColumn('career_jobs', 'department_id')) {
                $table->foreignId('department_id')->nullable()->constrained('departments')->nullOnDelete()->after('description');
            }

            if (!Schema::hasColumn('career_jobs', 'location_id')) {
                $table->foreignId('location_id')->nullable()->constrained('locations')->nullOnDelete()->after('department_id');
            }

            if (!Schema::hasColumn('career_jobs', 'category')) {
                $table->enum('category', ['early_career_internships','experienced_professionals'])
                      ->default('experienced_professionals')
                      ->after('location_id');
            }

            if (!Schema::hasColumn('career_jobs', 'work_arrangement')) {
                $table->enum('work_arrangement', ['on_site','hybrid','remote'])
                      ->default('on_site')
                      ->after('category');
            }
        });
    }

    public function down(): void
    {
        Schema::table('career_jobs', function (Blueprint $table) {
            if (Schema::hasColumn('career_jobs', 'work_arrangement')) $table->dropColumn('work_arrangement');
            if (Schema::hasColumn('career_jobs', 'category')) $table->dropColumn('category');
            if (Schema::hasColumn('career_jobs', 'location_id')) $table->dropConstrainedForeignId('location_id');
            if (Schema::hasColumn('career_jobs', 'department_id')) $table->dropConstrainedForeignId('department_id');
        });
    }
};
