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
            -->components([
                Section::make('Datos del documento')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('docu_folio')
                            ->label('Folio'),

                        TextEntry::make('docu_fecha_creacion')
                            ->label('Fecha de creación')
                            ->date(),

                        TextEntry::make('tipo.tido_tipo_documento')
                            ->label('Tipo de documento'),

                        TextEntry::make('estado.esdo_estado_documento')
                            ->label('Estado de seguimiento'),

                        TextEntry::make('contribuyente.cont_rfc')
                            ->label('Contribuyente'),

                        TextEntry::make('oficio.ofic_descripcion')
                            ->label('Oficio asociado'),

                        TextEntry::make('docu_descripcion')
                            ->label('Descripción')
                            ->columnSpanFull(),

                        TextEntry::make('docu_archivo')
                            ->label('Archivo')
                            ->formatStateUsing(fn ($state) => $state ? 'Abrir documento' : 'Sin archivo')
                            ->url(fn ($record) => $record->docu_archivo
                                ? asset('storage/' . $record->docu_archivo)
                                : null)
                            ->openUrlInNewTab()
                            ->icon('heroicon-o-document')
                            ->color('primary')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}