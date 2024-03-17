<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducationResource\Pages;
use App\Filament\Resources\EducationResource\RelationManagers;
use App\Models\Education;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;

use Filament\Tables\Columns\TextColumn;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('certification')
                    ->required()
                    ->label(__('certification'))
                    ->maxLength(100),

                TextInput::make('institution')
                    ->label(__('institution'))
                    ->maxLength(100),

                TextInput::make('completion_year')
                    ->required()
                    ->label(__('completion_year'))
                    ->numeric()
                    ->length(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('certification')
                    ->label(__('certification'))
                    ->searchable(),

                TextColumn::make('institution')
                    ->label(__('institution')),
                TextColumn::make('completion_year')
                    ->label(__('completion_year'))
                    ->sortable(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListEducation::route('/'),
            'create' => Pages\CreateEducation::route('/create'),
            'edit' => Pages\EditEducation::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('EducationResource');
    }

    public static function getPluralModelLabel(): string
    {
        return __('EducationResources');
    }
}
