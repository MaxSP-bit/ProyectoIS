<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Puesto;

class PuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        Puesto::create(['pues_nombre' => 'Jefe de Área']);
        Puesto::create(['pues_nombre' => 'Coordinador']);
        Puesto::create(['pues_nombre' => 'Supervisor']);
        Puesto::create(['pues_nombre' => 'Auditor']);
    }
}
