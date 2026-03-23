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
        Schema::create('colonias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150)->unique();
            $table->string('cruce', 100)->nullable();
            $table->string('tipo_colonia',100);
            $table->unsignedInteger('activa')->unique();
            $table->string('cp', 10);

            $table->foreignId('localidad_id')
                ->constrained('localidades')
                ->onDelete('cascade');

            $table->foreignId('seccion_id')
                ->constrained('secciones')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colonias');
    }
};
