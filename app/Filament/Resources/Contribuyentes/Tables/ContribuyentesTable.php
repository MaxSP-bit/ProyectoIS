<?php

namespace App\Filament\Resources\Contribuyentes\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ContribuyentesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('cont_id_contribuyente')
                    ->label('ID')
                    ->searchable(),
                TextColumn::make('nombre')
                    ->label('Nombre')
                    ->searchable(),
                TextColumn::make('apellidoPaterno')
                    ->label('Apellido Paterno')
                    ->searchable(),
                TextColumn::make('cont_razon_social')
                    ->label('Razón Social')
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
