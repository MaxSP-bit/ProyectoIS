<?php

namespace App\Filament\Resources\Usuarios\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class UsuarioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nombre de Usuario')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->label('Correo Electrónico')
                    ->email()
                    ->required()
                    ->maxLength(255),

                // Selector de Puesto
                Select::make('puesto_id')
                    ->label('Puesto')
                    ->relationship('puesto', 'pues_nombre')
                    ->required()
                    ->searchable()
                    ->preload(),

                // Selector de Empleado Vinculado
                Select::make('empleado_id')
                    ->label('Empleado Vinculado')
                    ->relationship('empleado', 'empl_nombre_pila')
                    ->getOptionLabelFromRecordUsing(fn ($record) => "{$record->empl_nombre_pila} {$record->empl_apaterno} {$record->empl_amaterno}")
                    ->searchable()
                    ->preload()
                    ->nullable(),
            ]);
    }
}