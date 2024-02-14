<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        // Creamos la tabla 'comics'
         Schema::create('comics', function (Blueprint $table) {
             $table->id(); // Creamos el campo de la clave primaria
             $table->unsignedInteger('stock'); // Campo para el stock del cómic
             $table->string('comic_number'); // Campo para el número de cómic
             $table->string('writers'); // Campo para los escritores
             $table->string('artist'); // Campo para el dibujante
             $table->text('description'); // Campo para la descripción
             $table->decimal('price', 8, 2); // Campo para el precio
             $table->string('image_url'); // Campo para la URL de la imagen
             $table->timestamps(); // Campos para la fecha de creación y actualización
         });
    }

    
   
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
