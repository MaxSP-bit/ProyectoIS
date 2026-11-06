<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Puesto;
use App\Models\User;
use App\Models\Empleado;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $usuarios = [
            ['name' => 'Auditor',      
            'email' => 'auditor@proyecto',     
            'puesto' => 'Auditor'
            ],

            ['name' => 'Supervisor',   
            'email' => 'supervisor@proyecto',  
            'puesto' => 'Supervisor'
            ],

            ['name' => 'Coordinador',  
            'email' => 'coordinador@proyecto', 
            'puesto' => 'Coordinador'
            ],

            ['name' => 'Jefe de Área', 
            'email' => 'jefearea@proyecto',    
            'puesto' => 'Jefe de Área'
            ],
        ];

        foreach ($usuarios as $usuario) {
            $puesto = Puesto::where('pues_nombre', $usuario['puesto'])->first();
            $empleado = Empleado::where('puesto_id', $puesto?->getKey())->first();

            User::updateOrCreate(
                ['email' => $usuario['email']],
                [
                    'name' => $usuario['name'],
                    'puesto_id' => $puesto?->getKey(),
                    'empleado_id' => $empleado?->getKey(),
                    'password' => bcrypt('12345'),
                ]
            );
        }
    }
}