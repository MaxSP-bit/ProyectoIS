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
            ->striped()
            ->columns([
                TextColumn::make('cont_id_contribuyente')
                    ->label('ID')
                    ->badge()
                    ->searchable(),
                    
                TextColumn::make('nombre')
                    ->label('Nombre')
                    ->weight('bold')
                    ->searchable(),

                TextColumn::make('apellidoPaterno')
                    ->label('Apellido Paterno')
                    ->color('gray')
                    ->searchable(),

                TextColumn::make('cont_razon_social')
                    ->label('Razón Social')
                    ->icon('heroicon-m-building-office-2')
                    ->color('primary')
                    ->searchable(),

                TextColumn::make('cont_rfc')
                    ->label('RFC')
                    ->badge()
                    ->color('info') 
                    ->searchable(),
            ])
            
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make()->iconButton(),
                EditAction::make()->iconButton(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
