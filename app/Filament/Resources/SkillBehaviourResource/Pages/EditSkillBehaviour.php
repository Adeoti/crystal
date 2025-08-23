<?php

namespace App\Filament\Resources\SkillBehaviourResource\Pages;

use App\Filament\Resources\SkillBehaviourResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSkillBehaviour extends EditRecord
{
    protected static string $resource = SkillBehaviourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
