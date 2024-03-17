<?php

namespace App\Filament\Resources\PersonalDataResource\Pages;

use App\Filament\Resources\PersonalDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPersonalData extends ListRecords
{
    protected static string $resource = PersonalDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
