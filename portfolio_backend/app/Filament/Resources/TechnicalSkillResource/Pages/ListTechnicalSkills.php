<?php

namespace App\Filament\Resources\TechnicalSkillResource\Pages;

use App\Filament\Resources\TechnicalSkillResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTechnicalSkills extends ListRecords
{
    protected static string $resource = TechnicalSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
