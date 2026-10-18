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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('empl_id_empleado');
            $table->string('empl_nombre_pila');
            $table->string('empl_apaterno');
            $table->string('empl_amaterno');
            $table->foreignId('puesto_id')->constrained('puestos', 'pues_id_puesto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
