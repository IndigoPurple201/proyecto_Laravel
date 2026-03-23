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
        Schema::create('coordinador_sector_seccion', function (Blueprint $table) {
            $table->foreignId('coordinador_sector_id')
                ->constrained('coordinador_sectors')
                ->cascadeOnDelete();

            $table->foreignId('seccion_id')
                ->constrained('secciones')
                ->cascadeOnDelete();

            $table->primary(['coordinador_sector_id', 'seccion_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coordinador_sector_seccion');
    }
};
