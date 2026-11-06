<?php

namespace App\Filament\Resources\Contribuyentes;

use App\Filament\Resources\Contribuyentes\Pages\CreateContribuyente;
use App\Filament\Resources\Contribuyentes\Pages\EditContribuyente;
use App\Filament\Resources\Contribuyentes\Pages\ListContribuyentes;
use App\Filament\Resources\Contribuyentes\Pages\ViewContribuyente;
use App\Filament\Resources\Contribuyentes\Schemas\ContribuyenteForm;
use App\Filament\Resources\Contribuyentes\Schemas\ContribuyenteInfolist;
use App\Filament\Resources\Contribuyentes\Tables\ContribuyentesTable;
use App\Models\Contribuyente;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContribuyenteResource extends Resource
{
    protected static ?string $model = Contribuyente::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ContribuyenteForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ContribuyenteInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContribuyentesTable::configure($table);
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
            'index' => ListContribuyentes::route('/'),
            'create' => CreateContribuyente::route('/create'),
            'view' => ViewContribuyente::route('/{record}'),
            'edit' => EditContribuyente::route('/{record}/edit'),
        ];
    }
}
