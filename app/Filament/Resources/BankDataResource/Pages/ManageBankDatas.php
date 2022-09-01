<?php

namespace App\Filament\Resources\BankDataResource\Pages;

use Filament\Pages\Actions;
use App\Imports\BankDataImport;
use Illuminate\Http\UploadedFile;
use Filament\Pages\Actions\Action;
use Livewire\TemporaryUploadedFile;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\BankDataResource;

class ManageBankDatas extends ManageRecords
{
    protected static string $resource = BankDataResource::class;

    public $fileName;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('ImportCsv')
                ->label('Bankdaten importieren')
                ->tooltip(__('Bankdaten aus CSV-Datei importieren'))
                ->icon('heroicon-s-upload')
                ->action(function () {
                    
                    //return Excel::upload(new BankDataImport(), storage_path($this->filename)); 
                })
                ->form([
                    FileUpload::make('imports')
                    ->preserveFilenames()
                    ->directory('imports')
                    ->acceptedFileTypes(['text/csv','application/csv','csv'])
                    ->maxSize(1024)
                    ->enableOpen(),
                   
                ])
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
