<?php

namespace App\Filament\Resources\BookingResource\Pages;

use Filament\Tables\Table;
use Filament\Pages\Actions;
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
            Actions\Action::make('export')->label('Buchungen exportieren')->icon('heroicon-o-document-download')->url(route('booking-export')),
            //Actions\Action::make('export-view')->label('Buchungsansicht exportieren')->icon('heroicon-o-document-download')->url(route('bookingview-export')),
            Actions\Action::make('export-list')->label('Buchungsliste exportieren')->icon('heroicon-o-document-download')->url(route('list-bookings-export')),
        ];
    }
    
    public function export()
    {
        //$filters = $this->cachedTableFilters();
        $query = $this->getFilteredTableQuery();
        $this->applySortingToTableQuery($query);
 
        $bookings = $query->get()->toArray();
 
        $filename = now()->format('Ymdhis').'-bookings.xlsx';
        dd($bookings);
        return Excel::download(new BookingsViewExport($bookings), $filename);    
    }
}
