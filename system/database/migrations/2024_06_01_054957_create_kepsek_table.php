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
        Schema::create('kepsek', function (Blueprint $table) {
            $table->uuid('kepsek_id')->primary();
            $table->string('email');
            $table->string('nip')->nullable();
            $table->string('nama')->nullable();
            $table->string('foto')->nullable();
            $table->string('jk')->nullable();
            $table->text('alamat')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepsek');
    }
};
