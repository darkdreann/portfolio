<?php

namespace App\Filament\Resources\PersonalDataResource\Pages;

use App\Filament\Resources\PersonalDataResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePersonalData extends CreateRecord
{
    protected static string $resource = PersonalDataResource::class;

    protected static bool $canCreateAnother = false;

    
}
