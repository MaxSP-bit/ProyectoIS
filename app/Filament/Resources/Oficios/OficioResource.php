<?php

namespace App\Filament\Resources\Oficios;

use App\Filament\Resources\Oficios\Pages\CreateOficio;
use App\Filament\Resources\Oficios\Pages\EditOficio;
use App\Filament\Resources\Oficios\Pages\ListOficios;
use App\Filament\Resources\Oficios\Pages\ViewOficio;
use App\Filament\Resources\Oficios\Schemas\OficioForm;
use App\Filament\Resources\Oficios\Schemas\OficioInfolist;
use App\Filament\Resources\Oficios\Tables\OficiosTable;
use App\Models\Oficio;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OficioResource extends Resource
{
    protected static ?string $model = Oficio::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return OficioForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return OficioInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OficiosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOficios::route('/'),
            'create' => CreateOficio::route('/create'),
            'view' => ViewOficio::route('/{record}'),
            'edit' => EditOficio::route('/{record}/edit'),
        ];
    }
}
