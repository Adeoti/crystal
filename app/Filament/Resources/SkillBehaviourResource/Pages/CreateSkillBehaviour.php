<?php

namespace App\Filament\Resources\SkillBehaviourResource\Pages;

use App\Filament\Resources\SkillBehaviourResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Category;
use App\Models\SkillBehaviour;
use App\Models\StudentSkillBehaviour;
use App\Models\StudentCategoryScore;

class CreateSkillBehaviour extends CreateRecord
{
    protected static string $resource = SkillBehaviourResource::class;

    protected function handleRecordCreation(array $data): \Illuminate\Database\Eloquent\Model
    {
        $uploaded = $data['file'] ?? null;
        if (! $uploaded) {
            throw new \RuntimeException('No CSV selected.');
        }

        $path = $uploaded->getRealPath();
        $fh = fopen($path, 'r');
        if (! $fh) {
            throw new \RuntimeException('Unable to read uploaded CSV.');
        }

        $headers = fgetcsv($fh);
        if (!$headers) {
            throw new \RuntimeException('Empty CSV.');
        }

        // Map headers: student_id | admission_no | Skill: X | Behaviour: Y
        $studentIdIdx = null;
        $admissionNoIdx = null;
        $categoryColumns = []; // idx => ['type'=>'skill|behavior','name'=>string]

        foreach ($headers as $i => $h) {
            $h = trim((string) $h);
            $lh = strtolower($h);

            if ($lh === 'student_id') {
                $studentIdIdx = $i;
                continue;
            }
            if ($lh === 'admission_no') {
                $admissionNoIdx = $i;
                continue;
            }

            if (stripos($h, 'skill:') === 0) {
                $categoryColumns[$i] = ['type' => 'skill', 'name' => trim(substr($h, 6))];
                continue;
            }
            if (stripos($h, 'behaviour:') === 0 || stripos($h, 'behavior:') === 0) {
                $prefix = stripos($h, 'behaviour:') === 0 ? 'behaviour:' : 'behavior:';
                $categoryColumns[$i] = ['type' => 'behavior', 'name' => trim(substr($h, strlen($prefix)))];
                continue;
            }
        }

        if ($studentIdIdx === null && $admissionNoIdx === null) {
            throw new \RuntimeException('CSV must include "student_id" or "admission_no" column.');
        }
        if (empty($categoryColumns)) {
            throw new \RuntimeException('CSV must include at least one "Skill: X" or "Behaviour: Y" column.');
        }

        // 1) Create ONE parent record (this upload)
        $parent = SkillBehaviour::create([
            'result_root_id' => (int) $data['result_root_id'],
            'class_id'       => (int) $data['class_id'],
        ]);

        DB::transaction(function () use ($fh, $studentIdIdx, $admissionNoIdx, $categoryColumns, $parent) {
            while (($row = fgetcsv($fh)) !== false) {
                // Resolve student
                $userId = null;
                if ($studentIdIdx !== null && isset($row[$studentIdIdx]) && is_numeric($row[$studentIdIdx])) {
                    $userId = (int) $row[$studentIdIdx];
                } elseif ($admissionNoIdx !== null && !empty($row[$admissionNoIdx])) {
                    $user = User::where('admission_no', $row[$admissionNoIdx])->first();
                    $userId = $user?->id;
                }
                if (! $userId) {
                    continue; // skip unknown student
                }

                // Create or get per-student row for this upload
                $studentEntry = StudentSkillBehaviour::firstOrCreate([
                    'skill_behaviour_id' => $parent->id,
                    'student_id'         => $userId,
                ]);

                // Upsert category scores
                foreach ($categoryColumns as $idx => $meta) {
                    $cell = $row[$idx] ?? null;
                    if ($cell === null || $cell === '') continue;

                    $score = (int) $cell;
                    if ($score < 1 || $score > 5) continue;

                    $category = Category::firstOrCreate(
                        ['name' => $meta['name'], 'type' => $meta['type']],
                        ['name' => $meta['name'], 'type' => $meta['type']]
                    );

                    StudentCategoryScore::updateOrCreate(
                        [
                            'student_skill_behaviour_id' => $studentEntry->id,
                            'category_id'                => $category->id,
                        ],
                        ['score' => $score]
                    );
                }
            }
        });

        fclose($fh);

        // Redirect to edit that ONE parent record (inline editing page)
        return $parent;
    }

    protected function afterCreate(): void
    {
        Notification::make()
            ->title('Upload processed')
            ->success()
            ->send();
    }
}
