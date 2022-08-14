<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Category;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use App\Filament\Resources\CategoryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use App\Filament\Resources\CategoryResource\RelationManagers;
use pxlrbt\FilamentExcel\Columns\Column;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-open';
    protected static ?string $navigationGroup = 'Basisdaten';

    protected static ?string $modelLabel = 'Kategorie';
    protected static ?string $pluralModelLabel = 'Kategorien';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()->schema([
                TextInput::make('name')->required(),
                TextInput::make('maxsupport')->label('Max. Förderung'),
                TextInput::make('maxsupportperyear')->label('Max. Förderung/Jahr'),
                RichEditor::make('remarks')->label('Anmerkung'),
                Toggle::make('active')->label('Aktiv'),
            ])
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->limit('50')->sortable()->searchable(),
                TextColumn::make('maxsupport')->limit('50')->label('Max. Förderung'),
                TextColumn::make('maxsupportperyear')->limit('50')->label('Max. Förderung/Jahr'),
                BooleanColumn::make('active')->label('Aktiv'),
                TextColumn::make('created_at')->since()->label('Erstellt'),
            ])
            ->filters([
                Filter::make('Activ')
                    ->query(fn (Builder $query): Builder => $query->where('active',true)),
                Filter::make('Inactiv')
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
                    ->label('Kategorien exportieren')
                    ->icon('heroicon-o-document-download')
                    ->exports([
                    ExcelExport::make()
                        ->fromTable()
                        ->withColumns([
                            Column::make('name')->width(30),
                            Column::make('maxsupport')->width(20),
                            Column::make('maxsupportperyear')->width(20),
                            Column::make('active')->width(10),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'view' => Pages\ViewCategory::route('/{record}'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
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
