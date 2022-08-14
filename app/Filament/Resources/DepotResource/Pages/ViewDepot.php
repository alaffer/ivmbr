<?php

namespace App\Filament\Resources\DepotResource\Pages;

use App\Filament\Resources\DepotResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDepot extends ViewRecord
{
    protected static string $resource = DepotResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
