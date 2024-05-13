<?php

namespace App\Filament\Resources\SoftSkillResource\Pages;

use App\Filament\Resources\SoftSkillResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSoftSkills extends ListRecords
{
    protected static string $resource = SoftSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
