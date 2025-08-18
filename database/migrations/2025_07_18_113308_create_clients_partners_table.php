<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
         if (Schema::hasTable('clients_partners')) {
            return; // الجدول موجود، تخطَّ الإنشاء
        }
        Schema::create('clients_partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo_path')->nullable();
            $table->enum('type', ['client', 'partner'])->default('client');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clients_partners');
    }
};
