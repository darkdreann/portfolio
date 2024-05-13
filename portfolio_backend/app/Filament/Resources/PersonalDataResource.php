<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonalDataResource\Pages;
use App\Filament\Resources\PersonalDataResource\RelationManagers;
use App\Models\PersonalData;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

use Filament\Tables\Columns\TextColumn;

class PersonalDataResource extends Resource
{
    protected static ?string $model = PersonalData::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('avatar')
                    ->disk('public') 
                    ->visibility('public')  
                    ->directory('avatars')  
                    ->multiple(false)  
                    ->acceptedFileTypes(['image/*'])
                    ->label(__('avatar'))
                    ->required(),

                FileUpload::make('cv')
                    ->disk('public')  
                    ->visibility('public') 
                    ->directory('cv')  
                    ->multiple(false) 
                    ->acceptedFileTypes(['application/pdf'])
                    ->label(__('cv'))
                    ->required(),

                TextInput::make('name')
                    ->required()
                    ->label(__('name'))
                    ->maxLength(100),

                TextInput::make('email')
                    ->required()
                    ->email()
                    ->label(__('email'))
                    ->maxLength(100),

                TextInput::make('github')
                    ->required()
                    ->prefix('https://github.com/')
                    ->label('GitHub')
                    ->maxLength(100),

                TextInput::make('linkedin')
                    ->required()
                    ->prefix('https://www.linkedin.com/in/')
                    ->suffix('/')
                    ->label('LinkedIn')
                    ->maxLength(100),

                Textarea::make('about_me')
                    ->autosize()
                    ->required()
                    ->label(__('about_me'))
                    ->maxLength(1500),

                TextInput::make('profession')
                    ->required()
                    ->label(__('profession'))
                    ->maxLength(100),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('name')),

                TextColumn::make('email')
                    ->label(__('email')),

                TextColumn::make('github')
                    ->label('GitHub'),

                TextColumn::make('linkedin')
                    ->label('LinkedIn'),
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
            'index' => Pages\ListPersonalData::route('/'),
            'create' => Pages\CreatePersonalData::route('/create'),
            'edit' => Pages\EditPersonalData::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return PersonalData::count() < 1;
    }

    public static function getModelLabel(): string
    {
        return __('personal_data_resource');
    }

    public static function getPluralModelLabel(): string
    {
        return __('personal_data_resource');
    }


}
