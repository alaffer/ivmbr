<?php

namespace App\Filament\Resources\BookingResource\Pages;

use Filament\Pages\Actions;
use pxlrbt\FilamentExcel\Columns\Column;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\BookingResource;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListBookings extends ListRecords
{
    protected static string $resource = BookingResource::class;

    protected function getActions(): array
    {
        //dd(View::class);
        
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('export')->label('Buchungen exportieren')->icon('heroicon-o-document-download')->url(route('booking-export')),
            //Actions\Action::make('export-view')->label('Buchungsansicht exportieren')->icon('heroicon-o-document-download')->url(route('bookingview-export')),
            // ExportAction::make('export-view')
            //     ->label('Buchungsansicht exportieren')
            //     ->exports([
            //         ExcelExport::make('table')->fromTable()
            //             // ->withWriterType(\Maatwebsite\Excel\Excel::XLSX)
            //             // ->withFilename(date('Y-m-d') . '_bookings'),
            //     ]),
        ];
    }
}
