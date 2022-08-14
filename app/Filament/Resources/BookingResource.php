<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Booking;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use pxlrbt\FilamentExcel\Columns\Column;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use Filament\Tables\Filters\MultiSelectFilter;
use App\Filament\Resources\BookingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use App\Filament\Resources\BookingResource\RelationManagers;

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
            Card::make()->schema([
                Select::make('depot_id')
                    -> label('Depot')
                    -> relationship('depot', 'name'),
                Select::make('category_id')
                    -> label('Kategorie')
                    -> relationship('category', 'name'),
                DatePicker::make('date')
                    ->label('Datum')
                    ->displayFormat($format = 'Y-m-d')
                    ->format('Y-m-d')
                    ->minDate('2010-01-01')
                    ->placeholder('Das Datum der Transaktion')
                    ->required(),
                RichEditor::make('purpose')->label('Zweck')->required(),
                TextInput::make('support_year')->label('Förderjahr')
                    ->placeholder('Das Jahr für das die Förderung der Person gilt (sonst leer lassen, nur Zahlen erlaubt)')
                    ->numeric()
                    ->mask(fn (TextInput\Mask $mask) => $mask
                        ->numeric()
                        ->integer() // Disallow decimal numbers.
                    ),
                TextInput::make('payin')->label('Eingang')->numeric()->mask(fn (TextInput\Mask $mask) => $mask->money('€', ',', 2)),
                TextInput::make('payout')->label('Ausgang')->numeric()->mask(fn (TextInput\Mask $mask) => $mask->money('€', ',', 2)),
                TextInput::make('person')->label('Person')->autocomplete($autocomplete = 'on')->placeholder('Der Namen der geförderten Person (sonst leer lassen)'),
                RichEditor::make('remarks')->label('Anmerkung'),
            ])
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->hidden(),
                TextColumn::make('depot.name')->limit(10)                    
                ->tooltip(function (TextColumn $column): ?string {
                    $state = $column->getState();
                    if (strlen($state) <= $column->getLimit()) {
                        return null;
                    }
                // Only render the tooltip if the column contents exceeds the length limit.
                return $state;
                }),
                TextColumn::make('category.name')->limit(10)                    
                ->tooltip(function (TextColumn $column): ?string {
                    $state = $column->getState();
                    if (strlen($state) <= $column->getLimit()) {
                        return null;
                    }
                // Only render the tooltip if the column contents exceeds the length limit.
                return $state;
                }),
                TextColumn::make('date')->label('Datum')->date('Y-m-d')->sortable(),
                TextColumn::make('purpose')->limit('80')->label('Zweck')->wrap()
                ->tooltip(function (TextColumn $column): ?string {
                    $state = $column->getState();
                    if (strlen($state) <= $column->getLimit()) {
                        return null;
                    }
                // Only render the tooltip if the column contents exceeds the length limit.
                return $state;
                }),
                TextColumn::make('support_year')->label('Förderj.'),
                TextColumn::make('payin')->label('Eingang')->money('eur'),
                TextColumn::make('payout')->label('Ausgang')->money('eur'),
                TextColumn::make('person')->label('Person')->searchable()->wrap(),
            ])->defaultSort('date','desc')
            ->filters([
                Filter::make('Datum')
                ->form([
                    Forms\Components\DatePicker::make('date_from')->label('Datum von'),
                    Forms\Components\DatePicker::make('date_until')->label('Datum bis'),
                ])
                ->query(function (Builder $query, array $data): Builder {
                    return $query
                        ->when(
                            $data['date_from'],
                            fn (Builder $query, $date): Builder => $query->whereDate('date', '>=', $date),
                        )
                        ->when(
                            $data['date_until'],
                            fn (Builder $query, $date): Builder => $query->whereDate('date', '<=', $date),
                        );
                }),
                SelectFilter::make('depot')->label('Depot')
                    ->relationship('depot','name'),
                MultiSelectFilter::make('category')->label('Kategorie')
                    ->relationship('category','name'),
                Filter::make('PersonSupport')->label('Nur Personen-Förderungen')
                    ->query(fn (Builder $query): Builder => $query->where('Person','<>',null)->where('Person','<>','')),
                Filter::make('Aktive')
                    ->query(fn (Builder $query): Builder => $query->where('deleted_at','=',null)),
                Filter::make('Gelöschte')
                    ->query(fn (Builder $query): Builder => $query->where('deleted_at','!=',null)),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
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
                        Column::make('depot.name')->width(30),
                        Column::make('category.name')->width(40),
                        Column::make('date')->width(20),
                        Column::make('purpose')->width(80),
                        Column::make('support_year')->width(10),
                        Column::make('payin')->width(30),
                        Column::make('payout')->width(30),
                        Column::make('person')->width(40),
                        Column::make('created_at')->heading('erstellt am')->format('Y-m-d'),
                        Column::make('deleted_at')->heading('gelöscht am')->format('Y-m-d'),
                    ])
                    ->withWriterType(\Maatwebsite\Excel\Excel::XLSX),
            ]),
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
}
