<?php

namespace App\Filament\Resources\Contribuyentes\Pages;

use App\Filament\Resources\Contribuyentes\ContribuyenteResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditContribuyente extends EditRecord
{
    protected static string $resource = ContribuyenteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
