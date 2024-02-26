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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->enum('zona', ['Cuba', 'Cartago', 'Provincia', 'Centro'])->default('Cuba');
            $table->enum('centro_v', ['SorMaria', 'Juan XXIII', 'SENA'])->default('SENA');
            $table->enum('puesto_v', ['A1', 'A2', 'A3', 'A4'])->default('A1');
            $table->string('estrato_social');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
