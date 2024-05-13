<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model {
        unset($record->technologies);

        $record->update($data);
        
        $record->technologies()->sync($data['technologies']);

        return $record;
    }

    public function getRecord(): Model
    {
        $record = parent::getRecord();
    
        if ($record) {
            $record->technologies = $record->technologies()->pluck('_id')->toArray();
        }
    
        return $record;
    }
}
