<?php

namespace App\Filament\Resources\SkillBehaviourResource\Pages;

use App\Filament\Resources\SkillBehaviourResource;
use Filament\Resources\Pages\Page;
use Filament\Forms;
use Filament\Notifications\Notification;
use App\Models\Category;
use App\Models\CategoryScore;
use App\Models\SkillBehaviour;
use Illuminate\Support\Facades\DB;

class UploadSkillBehaviours extends Page
{
    protected static string $resource = SkillBehaviourResource::class;

    protected static string $view = 'filament.resources.skill-behaviour-resource.pages.upload-skill-behaviours';

    protected static ?string $title = 'Upload CSV';

    public ?array $formData = [];

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\FileUpload::make('csv_file')
                ->label('CSV File')
                ->acceptedFileTypes(['text/csv', 'text/plain'])
                ->required()
                ->storeFiles(false), // so we can read directly
        ];
    }

    public function upload()
    {
        $file = $this->formData['csv_file'] ?? null;

        if (!$file) {
            Notification::make()->title('No file selected')->danger()->send();
            return;
        }

        $path = $file->getRealPath();
        $handle = fopen($path, 'r');
        $header = fgetcsv($handle);

        DB::transaction(function () use ($handle, $header) {
            while (($row = fgetcsv($handle)) !== false) {
                $data = array_combine($header, $row);

                $studentId = $data['student_id'] ?? null;
                $classId = $data['class_id'] ?? null;
                $resultRootId = $data['result_root_id'] ?? null;

                if (!$studentId || !$classId || !$resultRootId) {
                    continue;
                }

                $skillBehaviour = SkillBehaviour::firstOrCreate([
                    'user_id' => $studentId,
                    'class_id' => $classId,
                    'result_root_id' => $resultRootId,
                ]);

                foreach ($data as $key => $value) {
                    if (in_array($key, ['student_id', 'class_id', 'result_root_id'])) {
                        continue;
                    }
                    if (!is_numeric($value)) {
                        continue;
                    }

                    $category = Category::firstOrCreate([
                        'name' => $key,
                    ], [
                        'type' => 'skill', // you could infer type later
                    ]);

                    CategoryScore::updateOrCreate([
                        'skill_behaviour_id' => $skillBehaviour->id,
                        'category_id' => $category->id,
                    ], [
                        'score' => (int) $value,
                    ]);
                }
            }
        });

        Notification::make()->title('CSV Upload Successful')->success()->send();
    }
}
