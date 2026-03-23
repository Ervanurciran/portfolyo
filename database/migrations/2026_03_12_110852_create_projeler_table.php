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
        Schema::create('projeler', function (Blueprint $table) {
            $table->id();
            $table->string('isim'); // Proje adı
            $table->text('aciklama'); // Proje açıklaması
            $table->string('teknolojiler')->nullable(); // Kullandığın diller
            $table->string('github_url')->nullable(); // GitHub linki
            $table->string('canli_url')->nullable(); // Demo linki
            $table->string('resim')->nullable(); // Proje görseli yolu
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projeler');
    }
};
