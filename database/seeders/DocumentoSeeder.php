<?php

namespace Database\Seeders;

use App\Models\Documento;
use Illuminate\Database\Seeder;
use App\Models\Documento;

class DocumentoSeeder extends Seeder
{
    public function run(): void
    {
        Documento::create([
            'docu_folio' => 'FOLIO_DE_PRUEBA',
            'docu_descripcion' => 'Descripción del documento de prueba',
        ]);
    }
}
