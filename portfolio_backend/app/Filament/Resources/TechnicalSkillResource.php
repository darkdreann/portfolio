<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TechnicalSkillResource\Pages;
use App\Filament\Resources\TechnicalSkillResource\RelationManagers;
use App\Models\TechnicalSkill;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

use Filament\Tables\Columns\TextColumn;

class TechnicalSkillResource extends Resource
{
    protected static ?string $model = TechnicalSkill::class;

    protected static ?string $navigationIcon = 'heroicon-o-code-bracket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label(__('name_tech_skill'))
                    ->maxLength(100),

                Textarea::make('image')
                    ->required()
                    ->label(__('svg'))
                    ->maxLength(6000),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('name_tech_skill'))
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
            'index' => Pages\ListTechnicalSkills::route('/'),
            'create' => Pages\CreateTechnicalSkill::route('/create'),
            'edit' => Pages\EditTechnicalSkill::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('technical_skill_resource');
    }

    public static function getPluralModelLabel(): string
    {
        return __('technical_skill_resources');
    }
}
