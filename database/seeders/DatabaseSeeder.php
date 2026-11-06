<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call([
            PuestoSeeder::class,
            UserSeeder::class,
            EmpleadoSeeder::class,
            TipoDocumentoSeeder::class,
            TipoRevisionSeeder::class,
            EstadoDocumentoSeeder::class,
            ContribuyenteSeeder::class,
            DocumentoSeeder::class,
            OficioSeeder::class,
        ]);
    }
}