<?php
// database/migrations/2025_08_18_000001_create_locations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
         if (Schema::hasTable('locations')) {
            return; // الجدول موجود، تخطَّ الإنشاء
        }
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('country');                  // Saudi Arabia
            $table->string('city')->nullable();        // Al Khobar
            $table->string('building')->nullable();    // Al Jarbou Tower
            $table->string('floor_office')->nullable(); // Ground Floor - Office G01
            $table->string('district')->nullable();    // Al Aqrabiyah Dist
            $table->string('street')->nullable();      // Custodian of The Two Holy Mosques Rd
            $table->string('postal_code')->nullable(); // 3580
            $table->string('state_region')->nullable();// Eastern Province (اختياري)
            $table->string('email')->nullable();       // info@...
            $table->string('phone')->nullable();       // +966...
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->boolean('is_hq')->default(false);
            $table->text('address_note')->nullable();  // أي تفاصيل إضافية أو تنسيق حر
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
