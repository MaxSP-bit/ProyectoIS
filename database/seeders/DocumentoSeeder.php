<?php

namespace Database\Seeders;

use App\Models\Documento;
use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    public function run(): void
    {
        Documento::FirstOrCreate([
            'docu_folio' => 'FOLIO_DE_PRUEBA',
            'docu_descripcion' => 'Descripción del documento de prueba',
            'docu_fecha_creacion' => '2026-01-15',
            'tido_id_tipo_documento' => 1,
            'esdo_id_estado_documento' => 1,
            'cont_id_contribuyente' => 1,
            'ofic_id_oficio' => 1
        ]);
    }
}
