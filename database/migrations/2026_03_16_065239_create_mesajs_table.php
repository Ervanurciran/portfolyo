<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mesajlar', function (Blueprint $table) {
            $table->id();
            $table->string('isim');
            $table->string('email');
            $table->string('konu');
            $table->text('mesaj');
            $table->boolean('okundu')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mesajlar');
    }
};