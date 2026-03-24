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
        Schema::create('distrito_municipios', function (Blueprint $table) {
            $table->foreignId('municipio_id')
                ->constrained('municipios')
                ->onDelete('cascade');

            $table->foreignId('distrito_id')
                ->constrained('distritos')
                ->onDelete('cascade');

            $table->unique(['municipio_id', 'distrito_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distrito_municipios');
    }
};
