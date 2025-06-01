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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id_mahasiswa');
            $table->string('nim', 20);
            $table->string('nama', 100);
            $table->string('jurusan', 100);
            $table->string('kelas', 20);
            $table->integer('angkatan');
            $table->decimal('ipk', 3, 2);
            $table->integer('kehadiran');
            $table->string('status_kelulusan', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
