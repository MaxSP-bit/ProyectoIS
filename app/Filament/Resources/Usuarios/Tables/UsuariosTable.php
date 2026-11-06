<?php

namespace App\Filament\Resources\Usuarios\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class UsuariosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                 TextColumn::make('id')
                    ->label('ID')
                    ->searchable(),

                TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Correo')
                    ->searchable(),

                TextColumn::make('puesto.pues_nombre')
                    ->label('Puesto')
                    ->sortable()
                    ->searchable(),
                    
                TextColumn::make('empleado.empl_nombre_pila')
                    ->label('Empleado Vinculado')
                    ->formatStateUsing(function ($record) {
                        if ($record->empleado) {
                            return $record->empleado->empl_nombre_pila . ' ' . 
                                   $record->empleado->empl_apaterno . ' ' . 
                                   $record->empleado->empl_amaterno;
                        }
                        return 'Sin asignar';
                    })
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
