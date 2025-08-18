<?php
// database/migrations/2025_08_18_000010_alter_job_applications_add_greenhouse_fields.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('job_applications', function (Blueprint $table) {
            // اسم أول/أخير (نبقي full_name للتوافق إن رغبت)
            $table->string('first_name')->after('job_id');
            $table->string('last_name')->after('first_name');

            // الموقع (مدينة) + عنوان كامل
            $table->string('location_city')->nullable()->after('phone');

            $table->string('address_street')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_state')->nullable();
            $table->string('address_country')->nullable();
            $table->string('address_zip')->nullable();

            // مستندات: غطاء/نص
            $table->string('cover_letter_path')->nullable(); // ملف خطاب التغطية
            $table->longText('cover_letter_text')->nullable(); // إدخال يدوي بديل

            // روابط/معلومات مهنية
            $table->string('linkedin_url')->nullable();
            $table->text('licenses_certifications')->nullable(); // تراخيص/شهادات مهنية

            // أسئلة أهلية
            $table->boolean('requires_sponsorship')->nullable(); // Will you now/future require sponsorship?
            $table->boolean('is_over_18')->nullable();           // Are you at least 18?
            $table->boolean('has_non_compete')->nullable();      // Non-compete?
            $table->boolean('open_to_relocation')->nullable();   // Open to relocation?
            $table->string('relocation_where')->nullable();      // If open, where specifically?

            // (اختياري) حقول التنوع/التقارير الحكومية كما في النموذج — كلها اختيارية
            $table->string('eeoc_gender')->nullable();
            $table->string('eeoc_ethnicity')->nullable();
            $table->string('eeoc_race')->nullable();
            $table->string('veteran_status')->nullable();
            $table->string('disability_status')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('job_applications', function (Blueprint $table) {
            $table->dropColumn([
                'first_name','last_name',
                'location_city',
                'address_street','address_city','address_state','address_country','address_zip',
                'cover_letter_path','cover_letter_text',
                'linkedin_url','licenses_certifications',
                'requires_sponsorship','is_over_18','has_non_compete','open_to_relocation','relocation_where',
                'eeoc_gender','eeoc_ethnicity','eeoc_race','veteran_status','disability_status',
            ]);
        });
    }
};
