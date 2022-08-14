<?php

namespace App\Filament\Resources\DepotResource\Pages;

use App\Filament\Resources\DepotResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDepot extends EditRecord
{
    protected static string $resource = DepotResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
