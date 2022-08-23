<?php

namespace App\Filament\Resources\BookingResource\Pages;


use Filament\Pages\Actions;
use Illuminate\Support\Str;
use App\Exports\BookingsExport;
use App\Exports\BookingsViewExport;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\BookingResource;

class ListBookings extends ListRecords
{
    protected static string $resource = BookingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('exportAll')
                ->label('Buchungen exportieren')
                ->tooltip(__('Alle Buchungen nach Excel exportieren'))
                ->icon('heroicon-o-document-download')
                ->action(function ($record) {
                    $filename = 'bookings.xlsx';
                    return Excel::download(new BookingsExport, $filename);    
                }),
            Actions\Action::make('exportFiltered')
                ->label('Buchungsansicht exportieren')
                ->tooltip(__('Aktuelle Buchungsansicht nach Excel exportieren'))
                ->icon('heroicon-s-download')
                ->action(function ($record) {
                    $query = $this->getFilteredTableQuery();
                    //dd($query);
                    $this->applySortingToTableQuery($query);
                    $bookings = $query->get(); //->toArray();
                    //dd($bookings);
                    //$filename = now()->format('Ymdhis').'-bookings.xlsx';
                    $filename = 'bookings.xlsx';
                    return Excel::download(new BookingsViewExport($bookings), $filename);    
                }),
        ];
    }
}
