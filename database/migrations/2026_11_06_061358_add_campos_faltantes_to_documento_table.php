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
        Schema::table('documento_', function (Blueprint $table) {
            $table->date('docu_fecha_creacion')->nullable();
            $table->unsignedInteger('tido_id_tipo_documento')->nullable();
            $table->unsignedBigInteger('ofic_id_oficio')->nullable();
            $table->unsignedBigInteger('esdo_id_estado_documento')->default('1');
            $table->unsignedBigInteger('cont_id_contribuyente')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('documento_', function (Blueprint $table) {
            $table->dropColumn([
                'docu_fecha_creacion',
                'tido_id_tipo_documento',
                'esdo_id_estado_documento',
                'cont_id_contribuyente',
                'ofic_id_oficio',
            ]);
        });
    }
};
