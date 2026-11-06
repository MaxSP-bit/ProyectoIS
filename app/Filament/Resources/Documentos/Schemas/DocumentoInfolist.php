<?php

namespace App\Filament\Resources\Documentos\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DocumentoInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Datos del documento')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('docu_folio')
                            ->label('Folio'),

                        TextEntry::make('tipo.tido_tipo_documento')
                            ->label('Tipo de documento'),
                            
                        TextEntry::make('docu_descripcion')
                            ->label('Descripción')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}