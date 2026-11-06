<?php

namespace App\Filament\Resources\Contribuyentes\Tables;

use App\Models\Contribuyente;
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

                TextColumn::make('contribuyente')
                    ->label('Contribuyente / Razón Social')
                    ->getStateUsing(function (Contribuyente $record): string {
                        if (!empty($record->cont_razon_social)) {
                            return $record->cont_razon_social;
                        }
                        return trim("{$record->nombre} {$record->apellidoPaterno} {$record->apellidoMaterno}");
                    })
                    ->weight('bold')
                    ->icon(fn (Contribuyente $record) => $record->cont_razon_social ? 'heroicon-m-building-office-2' : 'heroicon-m-user')
                    ->color(fn (Contribuyente $record) => $record->cont_razon_social ? 'primary' : 'gray')
                    ->searchable(['nombre', 'apellidoPaterno', 'apellidoMaterno', 'cont_razon_social']),

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
