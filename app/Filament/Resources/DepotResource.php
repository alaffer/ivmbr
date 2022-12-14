<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Depot;
use Filament\Resources\Form;
use Maatwebsite\Excel\Excel;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FieldSet;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use pxlrbt\FilamentExcel\Columns\Column;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use App\Filament\Resources\DepotResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class DepotResource extends Resource
{
    protected static ?string $model = Depot::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?string $navigationGroup = 'Basisdaten';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            FieldSet::make(label: 'Infos')
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('accountType')->label('Kontoart')->required(),
            ]),
            FieldSet::make(label: 'Bank')
            ->schema([
                TextInput::make('bank_name')->label('Bank-Name')->required(),
                TextInput::make('blz')->label('BLZ'),
            ]),
            FieldSet::make(label: 'Excel')
            ->schema([
                TextInput::make('excelName')->label('Excel-Name'),
                TextInput::make('excelSort')->label('Excel-Sortierung')
                ->numeric()
                    ->mask(fn (TextInput\Mask $mask) => $mask
                        ->numeric()
                        ->integer() // Disallow decimal numbers.
                        ->minValue(1) // Set the minimum value that the number can be.
                        ->maxValue(Depot::all()->count()) // Set the maximum value that the number can be.
                    )->required(),
                ]),
            FieldSet::make(label: 'Sonstiges')
            ->schema([
                Textarea::make('remarks')->label('Anmerkung'),
                Toggle::make('active')->label('Aktiv'),
            ]),
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name')->limit('50')->sortable()->searchable(),
                TextColumn::make('bank_name')->label('Bank-Name'),
                TextColumn::make('blz')->label('BLZ'),
                TextColumn::make('accountType')->label('Kontoart'),
                TextColumn::make('excelName')->label('Excel-Name'),
                TextColumn::make('excelSort')->label('Excel-Sortierung'),
                IconColumn::make('active')->boolean()->label('Aktiv'),
                TextColumn::make('created_at')->since()->label('Erstellt'),
            ])
            ->filters([
                Filter::make('Aktiv')
                    ->query(fn (Builder $query): Builder => $query->where('active',true)),
                Filter::make('Inaktiv')
                    ->query(fn (Builder $query): Builder => $query->where('active',false)),
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
                    ->label('Depots exportieren')
                    ->icon('heroicon-o-document-download')
                    ->exports([
                    ExcelExport::make()
                        ->fromTable()
                        ->withColumns([
                            Column::make('name')->width(30),
                            Column::make('bank_name')->heading('Bank-Name')->width(30),
                            Column::make('blz')->heading('BLZ')->width(10),
                            Column::make('excelName')->heading('Excel-Name')->width(20),
                            Column::make('excelSort')->heading('Excel-Sort.')->width(20),
                            Column::make('active')->heading('Aktiv')->width(10),
                            Column::make('created_at')->heading('Erstellt am')->format('Y-m-d'),
                            Column::make('deleted_at')->heading('Gel??scht am')->format('Y-m-d'),
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
    protected function shouldPersistTableFiltersInSession(): bool
    {
        return true;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDepots::route('/'),
            'create' => Pages\CreateDepot::route('/create'),
            'view' => Pages\ViewDepot::route('/{record}'),
            'edit' => Pages\EditDepot::route('/{record}/edit'),
        ];
    }    
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    protected function getTableActions(): array
    {
        return [
            //
        ];
    }

}
