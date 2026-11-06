<?php

namespace App\Filament\Resources\Contribuyentes\Pages;

use App\Filament\Resources\Contribuyentes\ContribuyenteResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewContribuyente extends ViewRecord
{
    protected static string $resource = ContribuyenteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
