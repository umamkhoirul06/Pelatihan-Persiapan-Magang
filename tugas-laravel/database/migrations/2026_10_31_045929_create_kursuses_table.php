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
        Schema::create('kursuses', function (Blueprint $table) {
            $table->id();
    $table->foreignId('lpk_id')->constrained('lpks')->cascadeOnDelete();
    $table->foreignId('kategori_id')->constrained('kategoris')->cascadeOnDelete();
    $table->string('nama_kursus');
    $table->text('deskripsi')->nullable();
    $table->integer('harga');
    $table->string('durasi'); // Contoh: 6 Bulan, 12 Bulan
    $table->integer('kuota')->default(20);
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kursuses');
    }
};
