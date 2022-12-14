<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Depot;
use Complex\Exception;
use App\Models\Booking;
use App\Models\BankData;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BankImportResource\Pages;
use App\Filament\Resources\BankImportResource\RelationManagers;
use App\Filament\Resources\BankDataResource\Pages\ManageBankDatas;

class BankDataResource extends Resource
{
    protected static ?string $model = BankData::class;

    protected static ?string $navigationGroup = 'Import';
    protected static ?string $navigationIcon = 'heroicon-o-inbox';
    protected static ?string $modelLabel = 'Bankdaten-Import';
    protected static ?string $pluralModelLabel = 'Bankdaten-Import';

    public $bacaDepot;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('buchungsdatum')
                    ->displayFormat($format = 'Y-m-d')
                    ->format('Y-m-d')
                    ->minDate('2010-01-01')
                    ->required(),
                DatePicker::make('valutadatum')
                    ->displayFormat($format = 'Y-m-d')
                    ->format('Y-m-d')
                    ->minDate('2010-01-01')
                    ->required(),
                TextInput::make('buchungstext'),
                TextInput::make('interne_notiz'),
                TextInput::make('währung'),
                TextInput::make('betrag')->numeric()->mask(fn (TextInput\Mask $mask) => $mask->money('€', ',', 2)),
                Textarea::make('belegdaten'),
                TextInput::make('belegnummer'),
                TextInput::make('auftraggebername'),
                TextInput::make('auftraggeberkonto'),
                TextInput::make('auftraggeber_blz'),
                TextInput::make('empfängername' ),
                TextInput::make('empfängerkonto'),
                TextInput::make('empfänger_blz' ),
                TextInput::make('zahlungsgrund' ),
                TextInput::make('zahlungsreferenz'), 
                Toggle::make('imported_in_bookings')->label('Importiert'),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->hidden(),
                TextColumn::make('buchungsdatum')->sortable()->limit(10),
                // TextColumn::make('valutadatum')->limit(10),
                TextColumn::make('buchungstext')->limit(15)->tooltip(function (TextColumn $column): ?string {
                    $state = $column->getState();
                    if (strlen($state) <= $column->getLimit()) {
                        return null;
                    }
                // Only render the tooltip if the column contents exceeds the length limit.
                return $state;
                })->searchable(),
                // TextColumn::make('interne_notiz')->limit(20),
                TextColumn::make('währung')->limit(3),
                TextColumn::make('betrag')->limit(7),
                TextColumn::make('belegdaten')->limit(15)->tooltip(function (TextColumn $column): ?string {
                    $state = $column->getState();
                    if (strlen($state) <= $column->getLimit()) {
                        return null;
                    }
                // Only render the tooltip if the column contents exceeds the length limit.
                return $state;
                })->searchable(),
                // TextColumn::make('belegnummer')->limit(6),
                TextColumn::make('auftraggebername')->limit(16)->tooltip(function (TextColumn $column): ?string {
                    $state = $column->getState();
                    if (strlen($state) <= $column->getLimit()) {
                        return null;
                    }
                // Only render the tooltip if the column contents exceeds the length limit.
                return $state;
                })->searchable(),
                TextColumn::make('auftraggeberkonto')->limit(20)->tooltip(function (TextColumn $column): ?string {
                    $state = $column->getState();
                    if (strlen($state) <= $column->getLimit()) {
                        return null;
                    }
                // Only render the tooltip if the column contents exceeds the length limit.
                return $state;
                }),
                TextColumn::make('empfängerkonto')->limit(20)->tooltip(function (TextColumn $column): ?string {
                    $state = $column->getState();
                    if (strlen($state) <= $column->getLimit()) {
                        return null;
                    }
                // Only render the tooltip if the column contents exceeds the length limit.
                return $state;
                }),
                IconColumn::make('imported_in_bookings')->boolean()->label('Importiert'),
                // TextColumn::make('auftraggeber_blz')->limit(6),
            ])->defaultSort('buchungsdatum','desc')
            ->filters([
                Filter::make('Datum')
                ->form([
                    Forms\Components\DatePicker::make('buchungsdatum_from')->label('Buchungsdatum von'),
                    Forms\Components\DatePicker::make('buchungsdatum_until')->label('Buchungsdatum bis'),
                ])
                ->query(function (Builder $query, array $data): Builder {
                    return $query
                        ->when(
                            $data['buchungsdatum_from'],
                            fn (Builder $query, $date): Builder => $query->whereDate('buchungsdatum', '>=', $date),
                        )
                        ->when(
                            $data['buchungsdatum_until'],
                            fn (Builder $query, $date): Builder => $query->whereDate('buchungsdatum', '<=', $date),
                        );
                }),
                Filter::make('Aktive')
                    ->query(fn (Builder $query): Builder => $query->where('deleted_at','=',null))->toggle(),
                Filter::make('Gelöschte')
                    ->query(fn (Builder $query): Builder => $query->where('deleted_at','!=',null))->toggle(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('moveBuchung')
                    ->label('Übertragen')
                    ->color('success')
                    ->action(function (BankData $record){
                        try{
                            $bcheck = BankDataResource::checkBookingExists($record);
                            // dd($bcheck);
                            if($bcheck==false)
                            {    
                                $badd = BankDataResource::addBookingFromBankData($record);
                                // dd($badd);
                                if($badd==true)
                                {
                                    $record->imported_in_bookings = true;
                                    //$record->save();
                                    $record->delete();
                                    Notification::make()->title('Daten erfolgreich übernommen!')->icon('heroicon-s-upload')->iconColor('success')->send();
                                }
                            }
                            else{
                                $record->delete();
                                Notification::make()->title('Fehler! Daten bereits vorhanden! Datensatz entfernt!')->icon('heroicon-s-exclamation-circle')->iconColor('danger')->send();
                            }
                        }
                        catch(Exception $e){
                            Notification::make()->title('Fehler bei der Datenübernahme' . $e->getMessage())->icon('heroicon-s-exclamation-circle')->iconColor('danger')->send();
                        }
                        //dd($record);
                    }) //: string => route('bankdata.move', $record))
                    ->icon('heroicon-s-upload'),
                ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\BulkAction::make('importBuchung')
                    ->label('Importiere in Buchungen')
                    ->icon('heroicon-s-upload')
                    ->color('success'),
            ]);
    }
    protected function shouldPersistTableFiltersInSession(): bool
    {
        return true;
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageBankDatas::route('/'),
        ];
    }    

    public function getDefaultDepot()
    {
        $bacaDepot = env('BACA_DEPOT','00404023509');
    }
    public static function checkBookingExists(BankData $record = null)
    {
        if($record->betrag > 0)
        {                            
            $bcheck = Booking::where('paydate','=',$record->buchungsdatum)
            ->where('purpose','=',BankDataResource::createPurpose($record))
            ->where('payin','=',$record->betrag)
            // ->orwhere('payout','=',(-1) * $record->betrag)
            ->get();
        }                        
        else if($record->betrag < 0)
        {                            
            $bcheck = Booking::where('paydate','=',$record->buchungsdatum)
            ->where('purpose','=',BankDataResource::createPurpose($record))
            //->where('payin','=',$record->betrag)
            ->where('payout','=',(-1) * $record->betrag)
            ->get();
        }                        
        else 
        {                            
            $bcheck = Booking::where('paydate','=',$record->buchungsdatum)
            ->where('purpose','=',BankDataResource::createPurpose($record))
            ->where('payin','=',0)
            ->where('payout','=',0)
            ->get();
        }                        
        //dd($bcheck, $bcheck->count());
        return $bcheck->count() != 0;
    }    
    public static function addBookingFromBankData(BankData $record = null)
    {
        try{
            $booking = new Booking();
            $baca = env('BACA_DEPOT','00404023509');
            $depot = Depot::where('name', 'like', $baca)->first();
            //dd($baca,$depot);
            $booking->depot_id = $depot->id;
            $booking->category_id = null;
            $booking->paydate = $record->buchungsdatum;
            if($record->betrag > 0)
                $booking->payin = $record->betrag;
            else
                $booking->payout = -1 * $record->betrag;
            
            $booking->purpose = BankDataResource::createPurpose($record);
            $booking->person = null;
            $booking->remarks = null;
            $booking->save();
            return true;
        }
        catch(Exception $e){
            Notification::make()->title('Fehler bei der Datenübernahme' . $e->getMessage())->icon('heroicon-exclamation-circle')->iconColor('danger')->send();
            return false;
        }
    }
    static function createPurpose(BankData $record = null)
    {
        if($record->buchungstext == null & $record->belegdaten == null)
            return null;
        if($record->buchungstext == null & $record->belegdaten != null)
            return $record->belegdaten;
        if($record->buchungstext != null & $record->belegdaten == null)
            return $record->buchungstext;
        if($record->buchungstext != null & $record->belegdaten != null)
            return $record->buchungstext . PHP_EOL . $record->belegdaten;
    }
}
