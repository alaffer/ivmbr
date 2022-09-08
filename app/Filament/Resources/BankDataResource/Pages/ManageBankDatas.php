<?php

namespace App\Filament\Resources\BankDataResource\Pages;

use App\Models\CsvData;
use Filament\Pages\Actions;
use App\Imports\BankDataImport;
use Illuminate\Http\UploadedFile;
use Filament\Pages\Actions\Action;
use Livewire\TemporaryUploadedFile;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\BankDataResource;

class ManageBankDatas extends ManageRecords
{
    protected static string $resource = BankDataResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('ImportCsv')
                ->label('Bankdaten importieren')
                ->modalHeading('Import')
                ->tooltip(__('Bankdaten aus CSV-Datei importieren'))
                ->icon('heroicon-s-upload')
                ->action(function ( array  $data) {
                    //dd($data);
                    $fn = storage_path('app/public/' . (string) str($data['file2import'])); 
                    //dd($fn);
                    Excel::import(new BankDataImport, $fn, null, 'Csv');
                    Notification::make()->title('Erfolgreich importiert')->icon('heroicon-o-document-text')->iconColor('success')->send();
                    return $this->getResource()::getUrl('index');
                    })->form([
                        FileUpload::make('file2import')
                        ->preserveFilenames()
                        ->directory('imports')
                        //->acceptedFileTypes(['text/csv','application/csv','csv'])
                        ->maxSize(1024)
                        ->enableOpen()
                        ->enableDownload()
                    ]),
        ];
    }
}
