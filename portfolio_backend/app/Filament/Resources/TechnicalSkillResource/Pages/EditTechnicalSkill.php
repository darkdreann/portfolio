<?php

namespace App\Filament\Resources\TechnicalSkillResource\Pages;

use App\Filament\Resources\TechnicalSkillResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTechnicalSkill extends EditRecord
{
    protected static string $resource = TechnicalSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
