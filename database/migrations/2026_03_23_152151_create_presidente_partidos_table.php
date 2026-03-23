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
        Schema::create('presidente_partidos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150)->unique();
            $table->string('cargo', 100);
            $table->string('telefono', 50)->unique();

            $table->foreignId('municipio_id')
                ->constrained('municipios')
                ->onDelete('cascade'); 
                
            $table->foreignId('partido_id')
                ->constrained('partidos')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presidente_partidos');
    }
};
