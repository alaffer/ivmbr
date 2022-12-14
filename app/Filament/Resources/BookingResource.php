<?php

namespace App\Filament\Resources;

use Actions\Action;
use Filament\Forms;
use Filament\Tables;
use App\Models\Booking;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Illuminate\Support\Carbon;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FieldSet;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use pxlrbt\FilamentExcel\Columns\Column;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextInputColumn;
use Illuminate\Database\Eloquent\Collection;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use Filament\Tables\Filters\MultiSelectFilter;
use App\Filament\Resources\BookingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;


class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;
    protected static ?string $navigationGroup = 'Kassa';
    protected static ?string $navigationIcon = 'heroicon-o-cash';
    protected static ?string $modelLabel = 'Buchung';
    protected static ?string $pluralModelLabel = 'Buchungen';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            FieldSet::make(label: 'Depot/Kategorie')
            ->schema([
                Select::make('depot_id')
                    -> label('Depot')
                    -> relationship('depot', 'formName', fn (Builder $query) => $query->orderBy('active', 'DESC')->orderBy('excelSort', 'ASC'))
                    -> preload(),
                Select::make('category_id')
                    -> label('Kategorie')
                    -> relationship('category', 'name')
                    -> preload()
            ]),
            FieldSet::make(label: 'Infos')
            ->schema([
                DatePicker::make('paydate')
                    ->label('Datum')
                    ->displayFormat($format = 'Y-m-d')
                    ->format('Y-m-d')
                    ->minDate('2010-01-01')
                    ->placeholder('Das Datum der Transaktion')
                    ->required(),
                Textarea::make('purpose')->label('Zweck')->required(),
                TextInput::make('support_year')->label('F??rderjahr')
                    ->placeholder('Das Jahr f??r das die F??rderung der Person gilt (sonst leer lassen, nur Zahlen erlaubt)')
                    ->numeric()
                    ->mask(fn (TextInput\Mask $mask) => $mask
                        ->numeric()
                        ->integer() // Disallow decimal numbers.
                    ),
                TextInput::make('person')->label('Person')->autocomplete($autocomplete = 'on')->placeholder('Der Namen der gef??rderten Person (sonst leer lassen)'),
                ]),
            FieldSet::make(label: 'Zahlungen')
            ->schema([
                TextInput::make('payin')->label('Eingang')->numeric()->mask(fn (TextInput\Mask $mask) => $mask->money('???', ',', 2)),
                TextInput::make('payout')->label('Ausgang')->numeric()->mask(fn (TextInput\Mask $mask) => $mask->money('???', ',', 2)),
            ]),
            FieldSet::make(label: 'Anmerkungen')->columns(1)
            ->schema([
                TextInput::make('remarks')->label('Anmerkung'),
            ]),
        ]);
}

    public static function table(Table $table): Table 
    {
        return $table
            ->columns([
                TextColumn::make('id')->hidden(),
                TextColumn::make('depot.name')->limit(12)                    
                ->tooltip(function (TextColumn $column): ?string {
                    $state = $column->getState();
                    if (strlen($state) <= $column->getLimit()) {
                        return null;
                    }
                // Only render the tooltip if the column contents exceeds the length limit.
                return $state;
                }),
                TextColumn::make('category.name')->limit(25)->wrap()                 
                ->tooltip(function (TextColumn $column): ?string {
                    $state = $column->getState();
                    if (strlen($state) <= $column->getLimit()) {
                        return null;
                    }
                // Only render the tooltip if the column contents exceeds the length limit.
                return $state;
                }),
                TextColumn::make('paydate')->label('Datum')->sortable(),
                TextColumn::make('purpose')->limit('80')->label('Zweck')->wrap()
                ->tooltip(function (TextColumn $column): ?string {
                    $state = $column->getState();
                    if (strlen($state) <= $column->getLimit()) {
                        return null;
                    }
                // Only render the tooltip if the column contents exceeds the length limit.
                return $state;
                }),
                TextColumn::make('support_year')->label('F??rderj.'),
                TextColumn::make('payin')->label('Eingang')->money('eur'),
                TextColumn::make('payout')->label('Ausgang')->money('eur'),
                TextColumn::make('person')->label('Person')->searchable()->wrap(),
                TextColumn::make('deleted_at')->label('Gel??scht'),
            ])->defaultSort('paydate','desc')
            ->filters([
                Filter::make('Datum')
                ->form([
                    Forms\Components\DatePicker::make('paydate_from')->label('Datum von'),
                    Forms\Components\DatePicker::make('paydate_until')->label('Datum bis'),
                ])
                ->indicateUsing(function (array $data): array {
                    $indicators = [];
             
                    if ($data['paydate_from'] ?? null) {
                        $indicators['paydate_from'] = 'Datum von ' . Carbon::parse($data['paydate_from'])->toFormattedDateString();
                    }
             
                    if ($data['paydate_until'] ?? null) {
                        $indicators['paydate_until'] = 'Datum bis ' . Carbon::parse($data['paydate_until'])->toFormattedDateString();
                    }
             
                    return $indicators;
                })
                ->query(function (Builder $query, array $data): Builder {
                    return $query
                        ->when(
                            $data['paydate_from'],
                            fn (Builder $query, $date): Builder => $query->whereDate('paydate', '>=', $date),
                        )
                        ->when(
                            $data['paydate_until'],
                            fn (Builder $query, $date): Builder => $query->whereDate('paydate', '<=', $date),
                        );
                }),
                SelectFilter::make('depot')->label('Depot')
                    ->relationship('depot','name'),
                SelectFilter::make('category')->label('Kategorie')
                    ->relationship('category','name')->multiple(),
                Filter::make('PersonSupport')->label('Nur Personen-F??rderungen')
                    ->query(fn (Builder $query): Builder => $query->where('Person','<>',null)->where('Person','<>',''))->toggle(),
                Filter::make('Aktive')
                    ->query(fn (Builder $query): Builder => $query->where('deleted_at','=',null))->toggle(),
                Filter::make('Gel??schte')
                    ->query(fn (Builder $query): Builder => $query->where('deleted_at','!=',null))->toggle(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                // Tables\Actions\Action::make('exportAsJson')
                //     ->label(__('Export'))
                //     ->action(function ($record) {
                //         $booking = Str::slug($record->id, '_');
                //         return response()->streamDownload(function () use ($record) {
                //             $return = $record->attributesToArray();
                //             echo json_encode($return, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
                //         }, 'booking' . $booking . '.json');
                //     })
                //     ->tooltip(__('Export as Json'))
                //     ->icon('heroicon-s-download')
                //     ->color('primary'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                ExportBulkAction::make('Export')
                ->label('Buchungen exportieren')
                ->icon('heroicon-o-document-download')
                ->exports([
                ExcelExport::make()
                    ->fromTable()
                    ->withColumns([
                        Column::make('depot.name')->heading('Depot')->width(30),
                        Column::make('category.name')->heading('Kategorie')->width(40),
                        Column::make('paydate')->format('Y-m-d')->heading('Datum')->width(20),
                        Column::make('purpose')->heading('Zweck')->width(80),
                        Column::make('support_year')->heading('F??rder-Jahr')->width(10),
                        Column::make('payin')->heading('Eingang')->width(30),
                        Column::make('payout')->heading('Ausgang')->width(30),
                        Column::make('person')->width(40),
                        Column::make('created_at')->heading('Erstellt am')->format('Y-m-d'),
                        Column::make('deleted_at')->heading('Gel??scht am')->format('Y-m-d'),
                    ])
                    ->withWriterType(\Maatwebsite\Excel\Excel::XLSX),
            ]),
            // Tables\Actions\BulkAction::make('exportAllAsJson')
            // ->label('Export All as Json')
            // ->icon('heroicon-s-download')
            // ->action(function (Collection $records) {
            //     $archive = new \ZipArchive;
            //     $archive->open('file.zip', \ZipArchive::CREATE | \ZipArchive::OVERWRITE);
            //     foreach ($records as $record) {
            //         $name = 'booking' . Str::slug($record->id, '_') . '.json';
            //         $return = $record->attributesToArray();
            //         $content = json_encode($return, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
            //         $archive->addFromString($name, $content);
            //     }
            //     $archive->close();
            //     return response()->download('file.zip');
            // })
            // ->deselectRecordsAfterCompletion(),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'view' => Pages\ViewBooking::route('/{record}'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }    
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
    protected function shouldPersistTableFiltersInSession(): bool
    {
        return true;
    }
}
