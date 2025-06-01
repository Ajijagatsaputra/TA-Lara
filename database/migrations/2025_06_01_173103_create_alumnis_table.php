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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id('id_alumni');
            $table->unsignedBigInteger('id_mahasiswa');
            $table->integer('tahun_lulus');
            $table->string('email', 50);
            $table->string('no_wa', 15)->nullable();
            $table->string('pekerjaan', 100);
            $table->decimal('gaji', 10, 2);
            $table->string('tempat_kerja', 150);
            $table->timestamps();

            $table->foreign('id_mahasiswa')->references('id_mahasiswa')->on('mahasiswas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
