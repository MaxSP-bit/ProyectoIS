<?php

namespace App\Filament\Resources\Documentos\Schemas;

use App\Models\EstadoDocumento;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
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
                    ->required()
                    ->unique(ignoreRecord:true)
                    ->validationMessages([
                        'unique' => 'Ya existe un documento con este folio'
                    ]),
                DatePicker::make('docu_fecha_creacion')
                    ->label('Fecha de creación')
                    ->required()
                    ->maxDate(now()->subDay())
                    ->validationMessages([
                        'before_or_equal' => 'La fecha debe ser anterior al día de hoy'
                    ]),

                Textarea::make('docu_descripcion')
                    ->label('Descripción')
                    ->required()
                    ->columnSpanFull(),

                Select::make('cont_id_contribuyente')
                    ->label('Contribuyente')
                    ->relationship('contribuyente', 'cont_rfc')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('tido_id_tipo_documento')
                    ->label('Tipo de documento')
                    ->relationship('tipo', 'tido_tipo_documento')
                    ->required(),

                Select::make('ofic_id_oficio')
                    ->label('Oficio asociado')
                    ->relationship('oficio', 'ofic_descripcion')
                    ->searchable()
                    ->preload()
                    ->required(),
                
                Select::make('esdo_id_estado_documento')
                    ->label('Estado de seguimiento')
                    ->relationship('estado', 'esdo_estado_documento')
                    ->hiddenOn('create')
                    ->disabled(fn () => ! in_array(auth()->user()->rol, ['Jefe de área', 'Coordinador']))
                    ->live(),
            ]);
    }
}
