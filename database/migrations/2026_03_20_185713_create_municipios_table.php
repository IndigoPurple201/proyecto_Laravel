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
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->unique();
            $table->unsignedInteger('entidad')->unique();
            $table->string('mapa', 255)->nullable();

            $table->foreignId('region_id')
                ->constrained('regiones')
                ->onDelete('cascade');

            $table->foreignId('diputado_local_id')
                ->constrained('diputado_locals')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('municipios');
    }
};
