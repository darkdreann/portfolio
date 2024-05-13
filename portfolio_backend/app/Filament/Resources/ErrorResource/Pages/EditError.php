<?php

namespace App\Filament\Resources\ErrorResource\Pages;

use App\Filament\Resources\ErrorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditError extends EditRecord
{
    protected static string $resource = ErrorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
