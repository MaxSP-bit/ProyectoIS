<?php

namespace Database\Seeders;

use App\Models\Documento;
use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    public function run(): void
    {
        Documento::firstOrCreate(
            ['docu_folio' => 'FOLIO_DE_PRUEBA'],
            ['docu_descripcion' => 'Descripción del documento de prueba']
        );
    }
}