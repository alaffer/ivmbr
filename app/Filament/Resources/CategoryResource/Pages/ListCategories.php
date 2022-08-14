<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use Actions\Action;
use Actions\CreateAction;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\CategoryResource;

class ListCategories extends ListRecords
{
    protected static string $resource = CategoryResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
            Action::make('export')->label('Kategorien exportieren')->icon('heroicon-o-document-download')->url(route('category-export')),
        ];
    }
}
