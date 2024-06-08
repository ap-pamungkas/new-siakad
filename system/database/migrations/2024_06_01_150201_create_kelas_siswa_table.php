<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kelas_siswa', function (Blueprint $table) {
            $table->uuid('kelas_siswa_id')->primary();
            $table->char('kode');
            $table->string('guru_id');
            $table->string('mapel_id');

        

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kelas_siswa');
    }
};