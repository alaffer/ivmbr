<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\BankData;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
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
            ]);
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
                    ->query(fn (Builder $query): Builder => $query->where('deleted_at','=',null)),
                Filter::make('Gelöschte')
                    ->query(fn (Builder $query): Builder => $query->where('deleted_at','!=',null)),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\BulkAction::make('importBuchung')
                    ->label('Importiere in Buchungen')
                    ->icon('heroicon-s-upload')
                    ->color('success')->form([
                        
                        
                    ]),
            ]);
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
}
