<?php

namespace App\Filament\Resources\PersonalDataResource\Pages;

use App\Filament\Resources\PersonalDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPersonalData extends EditRecord
{
    protected static string $resource = PersonalDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
