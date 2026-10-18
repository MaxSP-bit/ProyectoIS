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
        Schema::create('oficios', function (Blueprint $table) {
            $table->id('ofic_id_oficio');
            $table->text('ofic_descripcion');
            $table->timestamp('ofic_fecha_creacion')->useCurrent();
            $table->timestamp('ofic_fecha_actualizacion')->useCurrent();
            $table->foreignId('tipo_revision_id')->constrained('tipos_revision', 'tire_id_tipo_revision');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oficios');
    }
};
