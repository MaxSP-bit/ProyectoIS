<?php

namespace App\Filament\Resources\Oficios\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;

class OficioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('ofic_descripcion')
                    ->label('Descripción')
                    ->required(),

                Select::make('tipo_revision_id')
                    ->label('Tipo de revisión')
                    ->relationship('tipoRevision', 'tire_tipo_revision')
                    ->required()
                    ->searchable(),
            ]);
    }
}
