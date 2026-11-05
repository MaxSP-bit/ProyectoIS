<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Oficio;

class OficioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Oficio::create([
            'ofic_descripcion' => 'Oficio de revisión por discrepancias fiscales detectadas en el ejercicio.',
            'tipo_revision_id' => 1,
        ]);
    }
}
