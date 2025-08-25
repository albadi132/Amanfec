<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // تحذير: هذا سيحذف كل بيانات team_members
        Schema::dropIfExists('team_members');

        Schema::create('team_members', function (Blueprint $table) {
            // إعدادات الجدول (محرك/ترميز/Collation) — تعمل على MySQL
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id(); // bigint unsigned AUTO_INCREMENT
            $table->integer('display_order')->default(0);
            $table->boolean('show_on_homepage')->default(false);
            $table->enum('status', ['active', 'inactive'])->default('active')
                  ->collation('utf8mb4_unicode_ci');

            $table->string('name');   // varchar(255)
            $table->string('title');  // varchar(255)
            $table->string('photo')->nullable();

            // department_id + FK ON DELETE SET NULL
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')
                  ->references('id')->on('departments')
                  ->nullOnDelete();

            $table->timestamps();     // created_at / updated_at

            $table->text('bio')->nullable()->collation('utf8mb4_unicode_ci');

            // فهرس (اختياري لأن FK ينشئ فهرسًا عادةً)
            $table->index('department_id', 'team_members_department_id_foreign');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
