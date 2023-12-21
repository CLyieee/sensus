<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SensuResource\Pages;
use App\Filament\Resources\SensuResource\RelationManagers;
use App\Models\Sensu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Filters\SelectFilter;

class SensuResource extends Resource
{
    protected static ?string $model = Sensu::class;

    protected static ?string $modelLabel = "Person";

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('age')->required(),
                TextInput::make('gender')->required(),
                Select::make('address')
                    ->options(sensu::address)
                    ->required(),
                TextInput::make('precinct')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('age')->sortable()->searchable(),
                TextColumn::make('gender')->searchable(),
                TextColumn::make('address')->sortable()->searchable(),
                TextColumn::make('precinct'),
            ])
            ->filters([
                SelectFilter::make('gender')
           ->options([
                    'male' => 'Male',
                ])
                ->searchable()
                ->preload()
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSensus::route('/'),
            'create' => Pages\CreateSensu::route('/create'),
            'edit' => Pages\EditSensu::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            SensuResource\Widgets\SensuWidget::class,
            AdminResource\Widgets\AdminWidget::class
        ];
    }
}
