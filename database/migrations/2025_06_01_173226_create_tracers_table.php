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
        Schema::create('tracers', function (Blueprint $table) {
            $table->id('id_tracer');
            $table->unsignedBigInteger('id_alumni');
            $table->date('tanggal_isi');
            $table->string('status_kerja', 50);
            $table->string('relevansi_pekerjaan', 100);
            $table->decimal('gaji_awal', 10, 2);
            $table->timestamps();

            $table->foreign('id_alumni')->references('id_alumni')->on('alumnis')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracers');
    }
};
