<?php

namespace App\Filament\Resources\BankDataResource\Pages;

use App\Filament\Resources\BankDataResource;
use App\Imports\BankDataImport;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBankDatas extends ManageRecords
{
    protected static string $resource = BankDataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        //     Actions\Action::make('ImportCsv')
        //         ->label('Bankdaten importieren')
        //         ->tooltip(__('Bankdaten aus CSV-Datei importieren'))
        //         ->icon('heroicon-s-upload')
        //         ->action(function ($record) {
        //             //dd($bookings);
        //             //$filename = now()->format('Ymdhis').'-bookings.xlsx';
        //             $filename = 'bookings.xlsx';
        //             return Excel::upload(new BankDataImport(), $filename);    
        //         }),
        ];
    }
}
