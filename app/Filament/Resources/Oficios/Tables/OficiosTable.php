<?php

namespace App\Filament\Resources\Oficios\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class OficiosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('ofic_fecha_creacion', direction: 'desc')
            ->columns([
                TextColumn::make('ofic_descripcion')
                    ->label('Descripción')
                    ->searchable()
                    ->limit(60),

                TextColumn::make('tipoRevision.tire_tipo_revision')
                    ->label('Tipo de revisión')
                    ->sortable(),

                TextColumn::make('ofic_fecha_creacion')
                    ->label('Fecha de creación')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('tipo_revision_id')
                    ->label('Tipo de revisión')
                    ->relationship('tipoRevision', 'tire_tipo_revision'),
            ])
            ->recordActions([
                ViewAction::make()->label('Ver'),
                EditAction::make()->label('Editar'),
                DeleteAction::make()->label('Eliminar'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
