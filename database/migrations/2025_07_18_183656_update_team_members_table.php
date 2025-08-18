<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (!Schema::hasTable('team_members')) return;

        // احذف bio فقط إذا كان موجودًا
        if (Schema::hasColumn('team_members', 'bio')) {
            Schema::table('team_members', function (Blueprint $table) {
                $table->dropColumn('bio');
            });
        }

        // أضف display_order إن لم يكن موجودًا
        if (!Schema::hasColumn('team_members', 'display_order')) {
            Schema::table('team_members', function (Blueprint $table) {
                $table->integer('display_order')->default(0)->after('id');
            });
        }

        // أضف show_on_homepage إن لم يكن موجودًا
        if (!Schema::hasColumn('team_members', 'show_on_homepage')) {
            Schema::table('team_members', function (Blueprint $table) {
                // ضع العمود بعد display_order إن كان موجودًا، وإلا بعد id
                if (Schema::hasColumn('team_members', 'display_order')) {
                    $table->boolean('show_on_homepage')->default(false)->after('display_order');
                } else {
                    $table->boolean('show_on_homepage')->default(false)->after('id');
                }
            });
        }

        // أضف status إن لم يكن موجودًا
        if (!Schema::hasColumn('team_members', 'status')) {
            Schema::table('team_members', function (Blueprint $table) {
                if (Schema::hasColumn('team_members', 'show_on_homepage')) {
                    $table->enum('status', ['active', 'inactive'])->default('active')->after('show_on_homepage');
                } else {
                    $table->enum('status', ['active', 'inactive'])->default('active')->after('id');
                }
            });
        }
    }

    public function down(): void
    {
        if (!Schema::hasTable('team_members')) return;

        // أعد bio فقط إذا كان غير موجود
        if (!Schema::hasColumn('team_members', 'bio')) {
            Schema::table('team_members', function (Blueprint $table) {
                $table->text('bio')->nullable();
            });
        }

        // احذف الأعمدة المضافة إن وُجدت
        Schema::table('team_members', function (Blueprint $table) {
            $drops = [];
            if (Schema::hasColumn('team_members', 'status')) $drops[] = 'status';
            if (Schema::hasColumn('team_members', 'show_on_homepage')) $drops[] = 'show_on_homepage';
            if (Schema::hasColumn('team_members', 'display_order')) $drops[] = 'display_order';

            if (!empty($drops)) {
                $table->dropColumn($drops);
            }
        });
    }
};
