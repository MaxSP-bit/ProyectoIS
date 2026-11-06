<?php

namespace Database\Seeders;

use App\Models\Contribuyente;
use Illuminate\Database\Seeder;


class ContribuyenteSeeder extends Seeder
{
public function run(): void
    {
        
        Contribuyente::create([
            'nombre' => 'Carlos Alberto',
            'apellidoPaterno' => 'Hernández',
            'apellidoMaterno' => 'García',
            'cont_razon_social' => null,
            'cont_rfc' => 'HEGC850114ABC',
        ]);

        
        Contribuyente::create([
            'nombre' => null,
            'apellidoPaterno' => null,
            'apellidoMaterno' => null,
            'cont_razon_social' => 'Servicios Administrativos del Centro SA de CV',
            'cont_rfc' => 'SAC100312XX4',
        ]);

       
        Contribuyente::create([
            'nombre' => 'María Fernanda',
            'apellidoPaterno' => 'López',
            'apellidoMaterno' => 'Martínez',
            'cont_razon_social' => null,
            'cont_rfc' => 'LOMF920328XYZ',
        ]);

       
        Contribuyente::create([
            'nombre' => null,
            'apellidoPaterno' => null,
            'apellidoMaterno' => null,
            'cont_razon_social' => 'Comercializadora y Distribuidora Fénix SA de CV',
            'cont_rfc' => 'CDF1506088W2',
        ]);

        
        Contribuyente::create([
            'nombre' => 'Juan José',
            'apellidoPaterno' => 'Ramírez',
            'apellidoMaterno' => 'Cruz',
            'cont_razon_social' => null,
            'cont_rfc' => 'RACJ7809101K9',
        ]);
    }
}
