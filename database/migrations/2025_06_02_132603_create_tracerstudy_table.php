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
        Schema::table('tracerstudy', function (Blueprint $table) {
            // Tambahkan field saran jika belum ada
            if (!Schema::hasColumn('tracerstudy', 'saran')) {
                $table->text('saran')->nullable()->after('gaji');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tracerstudy', function (Blueprint $table) {
            if (Schema::hasColumn('tracerstudy', 'saran')) {
                $table->dropColumn('saran');
            }
        });
    }
};
