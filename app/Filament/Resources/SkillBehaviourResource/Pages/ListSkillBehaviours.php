<?php

namespace App\Filament\Resources\SkillBehaviourResource\Pages;

use App\Filament\Resources\SkillBehaviourResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSkillBehaviours extends ListRecords
{
    protected static string $resource = SkillBehaviourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
