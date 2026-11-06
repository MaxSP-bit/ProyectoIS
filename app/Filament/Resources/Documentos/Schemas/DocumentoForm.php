<?php

namespace App\Filament\Resources\Documentos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DocumentoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('docu_folio')
                    ->label('Folio')
                    ->required(),

                Textarea::make('docu_descripcion')
                    ->label('Descripción')
                    ->required()
                    ->columnSpanFull(),

                Select::make('tido_id_tipo_documento')
                    ->label('Tipo de documento')
                    ->relationship('tipo', 'tido_tipo_documento')
                    ->required(),
            ]);
    }
}
