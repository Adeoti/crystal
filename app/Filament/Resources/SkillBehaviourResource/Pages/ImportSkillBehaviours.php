<?php

namespace App\Filament\Resources\SkillBehaviourResource\Pages;

use App\Filament\Resources\SkillBehaviourResource;
use Filament\Resources\Pages\Page;
use Filament\Forms;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;

class ImportSkillBehaviours extends Page
{
    protected static string $resource = SkillBehaviourResource::class;

    protected static string $view = 'filament.resources.skill-behaviours.pages.import-skill-behaviours';

    public $file;

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\FileUpload::make('file')
                ->label('Upload CSV File')
                ->acceptedFileTypes(['text/csv', 'text/plain'])
                ->required(),
        ];
    }

    public function submit()
    {
        $path = $this->file->store('imports');

        $csv = Reader::createFromPath(storage_path('app/' . $path), 'r');
        $csv->setHeaderOffset(0); // assumes first row is header

        DB::transaction(function () use ($csv) {
            foreach ($csv as $record) {
                // Example columns: student_id, class_id, result_root_id, skill, behaviour
                \App\Models\SkillBehaviour::create([
                    'student_id'     => $record['student_id'],
                    'class_id'       => $record['class_id'],
                    'result_root_id' => $record['result_root_id'],
                    'skill'          => $record['skill'],
                    'behaviour'      => $record['behaviour'],
                ]);
            }
        });

        Notification::make()
            ->title('Import successful!')
            ->success()
            ->send();

        return redirect(SkillBehaviourResource::getUrl('index'));
    }
}
