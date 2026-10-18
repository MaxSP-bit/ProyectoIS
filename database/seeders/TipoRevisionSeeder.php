<?php

namespace Database\Seeders;

use App\Models\TipoRevision;
use Illuminate\Database\Seeder;

class TipoRevisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoRevision::create(['tire_tipo_revision' => 'Revisión en gabinete']);
        TipoRevision::create(['tire_tipo_revision' => 'Visita domiciliaria']);
        TipoRevision::create(['tire_tipo_revision' => 'Revisión electrónica']);    
    }
}
