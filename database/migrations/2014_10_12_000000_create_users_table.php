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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->nullable(); // Modificar para permitir valores nulos
            $table->string('password');
            $table->string('address')->nullable(); // Nueva columna para la dirección
            $table->string('bank_holder')->nullable(); // Nueva columna para el titular de la cuenta
            $table->string('bank_account_number')->nullable(); // Nueva columna para el número de cuenta
            $table->string('bank_name')->nullable(); // Nueva columna para el nombre del banco
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
