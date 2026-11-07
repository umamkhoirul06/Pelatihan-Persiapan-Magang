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
        Schema::create('lpks', function (Blueprint $table) {
            $table->id();
    $table->string('nama_lpk');
    $table->string('lokasi'); // Kecamatan di Indramayu (Indramayu, Jatibarang, Lohbener, dll)
    $table->text('alamat');
    $table->text('deskripsi')->nullable();
    $table->decimal('rating', 2, 1)->default(4.5);
    $table->string('status_verifikasi')->default('pending'); // pending, approved, rejected
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lpks');
    }
};
