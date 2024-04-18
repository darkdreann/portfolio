<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ErrorResource\Pages;
use App\Filament\Resources\ErrorResource\RelationManagers;
use App\Models\Error;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DatePicker;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

use Filament\Tables\Filters\Filter;

class ErrorResource extends Resource
{
    protected static ?string $model = Error::class;

    protected static ?string $navigationIcon = 'heroicon-o-exclamation-triangle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->readonly()
                    ->label(__('title'))
                    ->maxLength(100),
                
                DatePicker::make('date')
                    ->label(__('date'))
                    ->readonly()
                    ->required(),

                Toggle::make('solved')
                    ->label(__('solved'))
                    ->onIcon('heroicon-m-check')
                    ->offIcon('heroicon-m-x-mark'),

                Textarea::make('message')
                    ->autosize()
                    ->readonly()
                    ->required()
                    ->label(__('message'))
                    ->maxLength(3000),
            ]);
    }

    public static function table(Table $table): Table
    {
        $dateFormat = __('date_format');

        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(__('title')),

                TextColumn::make('date')
                    ->date($dateFormat)
                    ->label(__('date')),

                ToggleColumn::make('solved')
                    ->label(__('solved')),
            ])
            ->filters([
                Filter::make('solved')
                    ->label(__('unsolved'))
                    ->toggle()
                    ->query(fn (Builder $query): Builder => $query->where('solved', false))
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListErrors::route('/'),
            'edit' => Pages\EditError::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getModelLabel(): string
    {
        return __('error');
    }

    public static function getPluralModelLabel(): string
    {
        return __('errors');
    }
}
