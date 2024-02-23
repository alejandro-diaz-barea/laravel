<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Nuevo campo 'title'
            $table->unsignedInteger('stock');
            $table->string('comic_number');
            $table->string('writers');
            $table->string('artist');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->string('image_url');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
