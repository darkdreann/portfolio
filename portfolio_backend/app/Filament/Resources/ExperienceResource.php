<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Filament\Resources\ExperienceResource\RelationManagers;
use App\Models\Experience;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;

use Filament\Tables\Columns\TextColumn;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-window';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('position')
                    ->required()
                    ->label(__('position'))
                    ->maxLength(100),

                TextInput::make('company')
                    ->required()
                    ->label(__('company'))
                    ->maxLength(100),

                DatePicker::make('start_date')
                    ->label(__('start_date'))
                    ->required(),

                DatePicker::make('end_date')
                    ->label(__('end_date')),

                Textarea::make('description')
                    ->label(__('description'))
                    ->autosize()
                    ->required()
                    ->maxLength(1500),
            ]);
    }

    public static function table(Table $table): Table
    {
        $dateFormat = __('date_format');

        return $table
            ->columns([
                TextColumn::make('position')
                    ->label(__('position'))
                    ->searchable(),
                    
                TextColumn::make('company')
                    ->label(__('company'))
                    ->searchable(),

                TextColumn::make('start_date')
                    ->date($dateFormat)
                    ->label(__('start_date'))
                    ->sortable(),

                TextColumn::make('end_date')
                    ->date($dateFormat)
                    ->label(__('end_date'))
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
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }


    public static function getModelLabel(): string
    {
        return __('experience_resource');
    }

    public static function getPluralModelLabel(): string
    {
        return __('experience_resources');
    }
}
