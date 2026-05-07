<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();

            // relasi ke siswa
            $table->foreignId('siswa_id')
                  ->constrained('siswa')
                  ->onDelete('cascade');

            $table->enum('status', ['Hadir', 'Izin', 'Sakit']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('absensis');
    }
};
