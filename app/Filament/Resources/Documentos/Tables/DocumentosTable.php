<?php

namespace App\Filament\Resources\Documentos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class DocumentosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('docu_folio')
                    ->label('Folio')
                    ->searchable(),
                TextColumn::make('docu_descripcion')
                    ->label('Descripción')
                    ->limit(50)
                    ->wrap()
                    ->searchable(),
                TextColumn::make('tipo.tido_tipo_documento')
                    ->label('Tipo'),
                TextColumn::make('estado.esdo_estado_documento')
                    ->label('Estado')
                    ->searchable(),
            ])
            ->filters([
            SelectFilter::make('esdo_id_estado_documento')
                    ->label('Tipo')
                    ->options([
                        1 => 'Factura',
                        2 => 'Estado de cuenta',
                        3 => 'Declaracion',
                    ]),
            SelectFilter::make('tido_id_tipo_documento')
                    ->label('Tipo')
                    ->options([
                        1 => 'En revisión',
                        2 => 'Cancelado',
                        3 => 'Entregado',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
                ViewAction::make(),
            ])
            ->recordAction(null)
            ->recordUrl(null)
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
