<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\BankData;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
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

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('Buchungsdatum')
                    ->displayFormat($format = 'Y-m-d')
                    ->format('Y-m-d')
                    ->minDate('2010-01-01')
                    ->required(),
                DatePicker::make('Valutadatum')
                    ->displayFormat($format = 'Y-m-d')
                    ->format('Y-m-d')
                    ->minDate('2010-01-01')
                    ->required(),
                TextInput::make('Buchungstext'),
                TextInput::make('Interne_Notiz'),
                TextInput::make('Währung'),
                TextInput::make('Betrag')->numeric()->mask(fn (TextInput\Mask $mask) => $mask->money('€', ',', 2)),
                TextInput::make('Belegdaten'),
                TextInput::make('Belegnummer'),
                TextInput::make('Auftraggebername'),
                TextInput::make('Auftraggeberkonto'),
                TextInput::make('Auftraggeber'),
                Toggle::make('ImportedInBooking')->label('Importiert'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->hidden(),
                TextColumn::make('Buchungsdatum')->limit(10),
                TextColumn::make('Valutadatum')->limit(10),
                TextColumn::make('Buchungstext')->limit(20),
                TextColumn::make('Interne_Notiz')->limit(20),
                TextColumn::make('Währung')->limit(3),
                TextColumn::make('Betrag')->limit(6),
                TextColumn::make('Belegdaten')->limit(6),
                TextColumn::make('Belegnummer')->limit(6),
                TextColumn::make('Auftraggebername')->limit(6),
                TextColumn::make('Auftraggeberkonto')->limit(6),
                TextColumn::make('Auftraggeber')->limit(6),
                BooleanColumn::make('ImportedInBooking')->label('Importiert'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => ManageBankDatas::route('/'),
            'importer' => ManageBankDatas::route('/import'),
        ];
    }    
}
