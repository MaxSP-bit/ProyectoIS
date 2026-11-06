<?php

namespace App\Filament\Widgets;

use Illuminate\Support\Facades\DB;
use Filament\Widgets\ChartWidget;

class DocumentosPorTipo extends ChartWidget
{
    protected ?string $heading = 'Documentos por tipo';

    protected ?string $maxHeight = '300px';

    protected ?string $pollingInterval = null;

    protected function getData(): array
    {
        $documentos = DB::table('documento_ as d')
            ->leftJoin(
                'tipo_documento as td',
                'd.tido_id_tipo_documento',
                '=',
                'td.tido_id_tipo_documento'
            )
            ->selectRaw("
                COALESCE(td.tido_tipo_documento, 'Sin tipo asignado') as tipo,
                COUNT(d.docu_id_documento) as total
            ")
            ->groupBy('td.tido_id_tipo_documento', 'td.tido_tipo_documento')
            ->orderBy('tipo')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Cantidad de documentos',
                    'data' => $documentos->pluck('total')
                        ->map(fn ($total) => (int) $total)
                        ->toArray(),
                ],
            ],
            'labels' => $documentos->pluck('tipo')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
