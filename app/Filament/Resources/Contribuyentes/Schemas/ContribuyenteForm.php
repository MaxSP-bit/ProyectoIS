<?php

namespace App\Filament\Resources\Contribuyentes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContribuyenteForm
{
    public static function configure(Schema $schema): Schema
    {
return $schema
            ->components([
                TextInput::make('nombre')
                    ->required()
                    ->maxLength(255)
                    ->label('Nombre'),

                TextInput::make('apellidoPaterno')
                    ->required()
                    ->maxLength(255)
                    ->label('Apellido Paterno'),

                TextInput::make('apellidoMaterno')
                    ->maxLength(255)
                    ->label('Apellido Materno'),

                TextInput::make('cont_razon_social')
                    ->required()
                    ->maxLength(255)
                    ->label('Razón Social'),

                TextInput::make('cont_rfc')
                    ->required()
                    ->maxLength(13)
                    ->label('RFC')
                    ->unique(ignoreRecord: true),
            ]);
    }
}
