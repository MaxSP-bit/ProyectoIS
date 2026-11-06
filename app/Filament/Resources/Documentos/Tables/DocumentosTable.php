<?php

namespace App\Filament\Resources\Documentos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class DocumentosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('docu_folio')
                    ->label('Folio')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('docu_descripcion')
                    ->label('Descripción')
                    ->limit(50)
                    ->wrap()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('Contribuyente.cont_rfc')
                    ->label('Contribuyente')
                    ->searchable(),

                TextColumn::make('tipo.tido_tipo_documento')
                    ->label('Tipo'),

                TextColumn::make('estado.esdo_estado_documento')
                    ->label('Estado')
                    ->searchable(),

                TextColumn::make('docu_fecha_creacion')
                    ->label('Creado el')
                    ->date()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])

            ->emptyStateHeading('Sin resultados')

            ->filters([
                SelectFilter::make('tido_id_tipo_documento')
                    ->label('Tipo')
                    ->options([
                        1 => 'Factura',
                        2 => 'Estado de cuenta',
                        3 => 'Declaracion',
                    ]),
                SelectFilter::make('esdo_id_estado_documento')
                    ->label('Estado')
                    ->options([
                        1 => 'En revisión',
                        2 => 'Cancelado',
                        3 => 'Entregado',
                    ]),
                /*Filter::make('fecha')
                    ->label('Fecha de creación')
                    ->schema([
                        DatePicker::make('desde'),
                        DatePicker::make('hasta'),
                    ])
                    ->query(fn (Builder $query, array $data) => $query
                        ->when($data['desde'], fn ($q, $d) => $q->whereDate('docu_fecha_creacion'))
                    )*/
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
