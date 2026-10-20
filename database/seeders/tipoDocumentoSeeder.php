<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoDocumento;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoDocumento::create([
            'tido_tipo_documento' => 'Factura',
        ]);

        TipoDocumento::create([
            'tido_tipo_documento' => 'Estado de cuenta',
        ]);

        TipoDocumento::create([
            'tido_tipo_documento' => 'Declaración',
        ]);
    }
}
