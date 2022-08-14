<?php

namespace App\Filament\Resources\DepotResource\Pages;

use Filament\Pages\Actions;
use Maatwebsite\Excel\Excel;
use Filament\Pages\Actions\Action;
use pxlrbt\FilamentExcel\Columns\Column;
use App\Filament\Resources\DepotResource;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;

class ListDepots extends ListRecords
{
    protected static ?string $model = Depot::class;
    protected static string $resource = DepotResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('export')->label('Depots exportieren')->icon('heroicon-o-document-download')->url(route('depot-export')),
            // ExportAction::make('Export')
            // ->label('Depots exportieren')
            // ->icon('heroicon-o-document-download')
            // ->exports([
            // ExcelExport::make()
            //     ->fromTable()
            //     ->withColumns([
            //         Column::make('name')->width(30),
            //         Column::make('bank_name')->heading('Bank Name')->width(30),
            //         Column::make('blz')->heading('BLZ')->width(10),
            //         Column::make('active')->heading('Aktiv')->width(10),
            //         Column::make('created_at')->heading('erstellt am')->format('Y-m-d'),
            //         Column::make('deleted_at')->heading('gelöscht am')->format('Y-m-d'),
            //     ])
            //     ->withWriterType(\Maatwebsite\Excel\Excel::XLSX),
            // ]),        
        ];
    }
}
