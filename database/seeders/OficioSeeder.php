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
        $oficios = [
            [
                'ofic_descripcion' => 'Oficio de revisión por discrepancias fiscales detectadas en el ejercicio.',
                'tipo_revision_id' => 1,
            ],
            [
                'ofic_descripcion' => 'Notificación oficial para aportación de pruebas y alegatos en procedimiento administrativo.',
                'tipo_revision_id' => 1,
            ],
            [
                'ofic_descripcion' => 'Cédula de conclusión de auditoría preventiva y revisión de cumplimiento normativo.',
                'tipo_revision_id' => 1,
            ],
            [
                'ofic_descripcion' => 'Requerimiento extraordinario de documentación contable y comprobantes fiscales.',
                'tipo_revision_id' => 1,
            ],
            [
                'ofic_descripcion' => 'Oficio informativo sobre actualización de lineamientos y normatividad interna.',
                'tipo_revision_id' => 1,
            ],
        ];

        foreach ($oficios as $data) {
            Oficio::firstOrCreate(
                ['ofic_descripcion' => $data['ofic_descripcion']], // Busca por la descripción para evitar duplicados
                $data                                            // Inserta el registro completo si no existe
            );
        }
    }
}