<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SoftSkillResource\Pages;
use App\Filament\Resources\SoftSkillResource\RelationManagers;
use App\Models\SoftSkill;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;

use Filament\Tables\Columns\TextColumn;

class SoftSkillResource extends Resource
{
    protected static ?string $model = SoftSkill::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label(__('name'))
                    ->required()
                    ->maxLength(100),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('name'))
                    ->searchable(),
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
            'index' => Pages\ListSoftSkills::route('/'),
            'create' => Pages\CreateSoftSkill::route('/create'),
            'edit' => Pages\EditSoftSkill::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('SoftSkillResource');
    }

    public static function getPluralModelLabel(): string
    {
        return __('SoftSkillResources');
    }
}
