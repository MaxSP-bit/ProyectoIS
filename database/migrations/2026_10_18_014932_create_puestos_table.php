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
        Schema::create('puestos', function (Blueprint $table) {
            $table->id('pues_id_puesto');
            $table->string('pues_nombre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puestos');
    }
};
