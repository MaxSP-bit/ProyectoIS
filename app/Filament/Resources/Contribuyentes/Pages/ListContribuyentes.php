<?php

namespace App\Filament\Resources\Contribuyentes\Pages;

use App\Filament\Resources\Contribuyentes\ContribuyenteResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContribuyentes extends ListRecords
{
    protected static string $resource = ContribuyenteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
