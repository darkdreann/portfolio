<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


use App\Models\TechnicalSkill;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\Column;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('title')
                    ->required()
                    ->label(__('title'))
                    ->maxLength(100),

                FileUpload::make('image')
                    ->disk('public') 
                    ->visibility('public')  
                    ->directory('projects')  
                    ->multiple(false)  
                    ->acceptedFileTypes(['image/*'])
                    ->label(__('image'))
                    ->required(),


                TextInput::make('github')
                    ->required()
                    ->prefix('https://github.com/')
                    ->label('GitHub')
                    ->maxLength(100),

                TextInput::make('youtube')
                    ->prefix('https://www.youtube.com/')
                    ->maxLength(100),

                TextInput::make('website')
                    ->url()
                    ->label(__('website'))
                    ->maxLength(100),

                Select::make('technologies')
                    ->options(
                        TechnicalSkill::all()->pluck('name', '_id')
                    )
                    ->multiple()
                    ->label(__('technologies'))
                    ->preload()
                    ->maxItems(12)
                    ->optionsLimit(50)
                    ->createOptionForm([
                        TextInput::make('name')
                        ->required()
                        ->label(__('name_tech_skill'))
                        ->maxLength(100),

                        Textarea::make('image')
                            ->required()
                            ->label(__('svg'))
                            ->maxLength(6000),
                    ])
                    ->createOptionUsing(function (array $data): string {
                        return TechnicalSkill::create($data)->getKey();
                    })
                    ->searchable(),

                Textarea::make('description')
                    ->autosize()
                    ->required()
                    ->label('description')
                    ->maxLength(700),

                
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(__('title'))
                    ->searchable(),

                TextColumn::make('website')
                    ->label(__('website')),

                TextColumn::make('github')
                    ->label('GitHub'),

                TextColumn::make('youtube'),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('project_resource');
    }

    public static function getPluralModelLabel(): string
    {
        return __('project_resources');
    }

}
