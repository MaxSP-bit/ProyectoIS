<?php

namespace Database\Seeders;

use App\Models\EstadoDocumento;
use Illuminate\Database\Seeder;
use App\Models\EstadoDocumento;

class EstadoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstadoDocumento::create(['esdo_estado_documento' => 'En revisión']);
        EstadoDocumento::create(['esdo_estado_documento' => 'Cancelado']);
        EstadoDocumento::create(['esdo_estado_documento' => 'Entregado']);
    }
}
