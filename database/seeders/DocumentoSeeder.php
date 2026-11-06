<?php

namespace Database\Seeders;

use App\Models\Documento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DocumentoSeeder extends Seeder
{
    public function run(): void
    {
         $archivosTipo = [
            1 => 'factura-ejemplo.pdf',
            2 => 'estado-cuenta-ejemplo.pdf',
            3 => 'declaracion-ejemplo.pdf',
        ];
        $documentos = [
            [
                'docu_folio' => 'FOLIO-2026-001',
                'docu_descripcion' => 'Notificación de resolución fiscal y auditoría preventiva para el ejercicio actual.',
                'docu_fecha_creacion' => '2026-01-15',
                'tido_id_tipo_documento' => 1,
                'esdo_id_estado_documento' => 1, // Activo / En proceso
                'cont_id_contribuyente' => 1,
                'ofic_id_oficio' => 1,
            ],
            [
                'docu_folio' => 'FOLIO-2026-002',
                'docu_descripcion' => 'Requerimiento de información sobre obligaciones en materia de normatividad e información.',
                'docu_fecha_creacion' => '2026-02-10',
                'tido_id_tipo_documento' => 1,
                'esdo_id_estado_documento' => 1,
                'cont_id_contribuyente' => 2,
                'ofic_id_oficio' => 1,
            ],
            [
                'docu_folio' => 'FOLIO-2026-003',
                'docu_descripcion' => 'Acta de entrega-recepción de documentación comprobatoria de gastos operativos.',
                'docu_fecha_creacion' => '2026-03-05',
                'tido_id_tipo_documento' => 2,
                'esdo_id_estado_documento' => 2, // Cancelado (Ideal para probar la lógica de tu OficioPolicy)
                'cont_id_contribuyente' => 1,
                'ofic_id_oficio' => 2,
            ],
            [
                'docu_folio' => 'FOLIO-2026-004',
                'docu_descripcion' => 'Oficio de contestación a recurso de revisión administrativo y legal.',
                'docu_fecha_creacion' => '2026-04-12',
                'tido_id_tipo_documento' => 1,
                'esdo_id_estado_documento' => 1,
                'cont_id_contribuyente' => 3,
                'ofic_id_oficio' => 2,
            ],
            [
                'docu_folio' => 'FOLIO-2026-005',
                'docu_descripcion' => 'Cédula de notificación de observaciones derivadas de fiscalización interna.',
                'docu_fecha_creacion' => '2026-05-20',
                'tido_id_tipo_documento' => 2,
                'esdo_id_estado_documento' => 1,
                'cont_id_contribuyente' => 2,
                'ofic_id_oficio' => 3,
            ],
        ];

        foreach ($documentos as $data) {
            $nombreArchivo = $archivosTipo[$data['tido_id_tipo_documento']];
            $origen = database_path('seeders/archivos/' . $nombreArchivo);

            $ruta = 'documentos/' . $data['docu_folio'] . '.pdf';
            Storage::disk('public')->put($ruta, File::get($origen));

            $data['docu_archivo'] = $ruta;

            Documento::updateOrCreate(
                ['docu_folio' => $data['docu_folio']],
                $data
            );
        }
    }
}