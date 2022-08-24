<?php

namespace App\Filament\Resources\BankImportResource\Pages;

use App\Filament\Resources\BankImportResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBankImports extends ManageRecords
{
    protected static string $resource = BankImportResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
