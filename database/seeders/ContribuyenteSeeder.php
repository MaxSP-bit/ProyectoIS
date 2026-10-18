<?php

namespace Database\Seeders;

use App\Models\Contribuyente;
use Illuminate\Database\Seeder;

class ContribuyenteSeeder extends Seeder
{
    public function run(): void
    {
        Contribuyente::firstOrCreate(
            ['cont_rfc' => 'RFC_DE_PRUEBA'],
            [
                'nombre' => 'Nombre de prueba',
                'apellidoPaterno' => 'Apellido paterno',
                'apellidoMaterno' => 'Apellido materno',
                'cont_razon_social' => 'Razón social de prueba',
            ]
        );
    }
}