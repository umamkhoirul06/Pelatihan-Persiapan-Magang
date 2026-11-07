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
        // database/migrations/xxxx_xx_xx_xxxxxx_create_kamars_table.php

Schema::create('kamars', function (Blueprint $table) {
    $table->id();
    $table->string('nomor_kamar'); 
    $table->string('tipe');        
    $table->integer('harga');     
    $table->string('status')->default('Tersedia'); 
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamars');
    }
};
