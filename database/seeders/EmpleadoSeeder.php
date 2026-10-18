<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        Empleado::create([
            'empl_nombre_pila' => 'Maximiliano',
            'empl_apaterno'    => 'Soto',
            'empl_amaterno'    => 'Palao',
            'puesto_id'        => 1,
        ]);

        Empleado::create([
            'empl_nombre_pila' => 'José Fernando',
            'empl_apaterno'    => 'Ochoa',
            'empl_amaterno'    => 'Trejo',
            'puesto_id'        => 2,
        ]);

        Empleado::create([
            'empl_nombre_pila' => 'Paris',
            'empl_apaterno'    => 'Mendoza',
            'empl_amaterno'    => 'Moreno',
            'puesto_id'        => 3,
        ]);

        Empleado::create([
            'empl_nombre_pila' => 'Noemí',
            'empl_apaterno'    => 'Castellanos',
            'empl_amaterno'    => 'Marín',
            'puesto_id'        => 4,
        ]);
    }
}
