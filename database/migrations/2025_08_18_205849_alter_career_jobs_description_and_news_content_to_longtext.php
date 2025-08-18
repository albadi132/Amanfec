<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (Schema::hasTable('career_jobs') && Schema::hasColumn('career_jobs', 'description')) {
            Schema::table('career_jobs', function (Blueprint $table) {
                $table->longText('description')->change(); // إلى LONGTEXT
            });
        }

        if (Schema::hasTable('news') && Schema::hasColumn('news', 'content')) {
            Schema::table('news', function (Blueprint $table) {
                $table->longText('content')->change(); // إلى LONGTEXT
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('career_jobs') && Schema::hasColumn('career_jobs', 'description')) {
            Schema::table('career_jobs', function (Blueprint $table) {
                $table->text('description')->change(); // رجوع إلى TEXT
            });
        }

        if (Schema::hasTable('news') && Schema::hasColumn('news', 'content')) {
            Schema::table('news', function (Blueprint $table) {
                $table->text('content')->change(); // رجوع إلى TEXT
            });
        }
    }
};
