<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class oficioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Oficio::create([
            'ofic_descripcion' => 'Oficio de prueba',
            'tipo_revision_id' => 1, 
        ]);
    }
}
