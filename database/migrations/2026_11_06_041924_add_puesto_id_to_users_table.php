<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('puesto_id')->nullable()->after('email');

            $table->foreign('puesto_id')
                  ->references('pues_id_puesto')
                  ->on('puestos')
                  ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['puesto_id']);
            $table->dropColumn('puesto_id');
        });
    }
};