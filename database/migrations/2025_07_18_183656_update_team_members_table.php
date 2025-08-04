<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('team_members', function (Blueprint $table) {
            // حذف العمود bio
            $table->dropColumn('bio');

            // إضافة الأعمدة الجديدة
            $table->integer('display_order')->default(0)->after('id'); // أو بعد name حسب الترتيب الذي تريده
            $table->boolean('show_on_homepage')->default(false)->after('display_order');
            $table->enum('status', ['active', 'inactive'])->default('active')->after('show_on_homepage');
        });
    }

    public function down(): void
    {
        Schema::table('team_members', function (Blueprint $table) {
            // إعادة bio
            $table->text('bio')->nullable();

            // حذف الأعمدة المضافة
            $table->dropColumn(['display_order', 'show_on_homepage', 'status']);
        });
    }
};
