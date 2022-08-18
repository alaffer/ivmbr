<?php

namespace App\Filament\Resources\DepotResource\Pages;

use App\Filament\Resources\DepotResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDepot extends CreateRecord
{
    protected static string $resource = DepotResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
