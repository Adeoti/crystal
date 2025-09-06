<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use App\Models\Branch;
use App\Models\SchoolClass;
use App\Models\User;
use App\Models\Attendance;
use Filament\Notifications\Notification;

class BatchAttendance extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-check-circle';
    protected static string $view = 'filament.pages.batch-attendance';
    protected static ?string $navigationLabel = "Mark Attendance";

    public $class_id;
    public $branch_id;
    public $attendance_date;
    public $students = [];
    public $result_root_id;

    protected function getFormSchema(): array
    {
        return [
            Section::make('Details')
                ->schema([
                    Select::make('branch_id')
                        ->label('Branch')
                        ->options(Branch::all()->pluck('name', 'id'))
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(function (callable $set, $state) {
                            $this->branch_id = $state;  // Ensure branch_id is updated
                            $set('class_id', null);     // Reset class_id on branch change
                        }),

                    Select::make('class_id')
                        ->label('Class')
                        ->options(function (callable $get) {
                            $branchId = $get('branch_id');
                            return $branchId
                                ? SchoolClass::whereJsonContains('branch_ids', $branchId)->pluck('name', 'id')
                                : ['0' => 'No matched classes found'];
                        })
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(function (callable $set, $state) {
                            $this->class_id = $state;  // Ensure class_id is updated
                            $this->loadStudents($state);
                        }),

                    DatePicker::make('attendance_date')
                        ->label('Date')
                        ->required()
                        ->default(now()),
                    Select::make('result_root_id')
                        ->label('Result Template')
                        // ->options(function (callable $get) {
                        //     $branchId = $get('branch_id');
                        //     return $branchId
                        //         ? \App\Models\ResultRoot::whereJsonContains('branch_ids', $branchId)->pluck('name', 'id')
                        //         : ['0' => 'No matched templates found'];
                        // })
                        ->options(\App\Models\ResultRoot::all()->pluck('name', 'id')),
                ])->columns(4),

            Section::make('Students')
                ->schema([
                    Repeater::make('students')
                        ->schema([
                            TextInput::make('student_name')
                                ->label('Student Name')
                                ->disabled()
                                ->required(),

                            Select::make('status')
                                ->required()
                                ->label('Attendance Status')
                                ->options([
                                    'Present' => 'Present',
                                    'Absent' => 'Absent',
                                    'Late' => 'Late',
                                ])
                                ->default('Present')
                        ])
                        ->disableLabel()
                        ->columns(2),
                ])
        ];
    }

    protected function loadStudents($classId)
    {
        if (!$this->branch_id || !$classId) {
            return;
        }

        $students = User::where('branch_id', $this->branch_id)
            ->whereHas('student', function ($query) use ($classId) {
                $query->where('student_class', $classId);
            })->get();

        $this->form->fill([
            'students' => $students->map(function ($student) {
                return [
                    'student_id' => $student->id,
                    'student_name' => $student->name,
                    'status' => 'Present', // default status
                ];
            })->toArray(),
        ]);
    }

    public function saveAttendance()
    {
        $data = $this->form->getState();
        //dd($data['branch_id']);

        foreach ($data['students'] as $studentAttendance) {
            Attendance::updateOrCreate(
                [
                    'student_id' => $studentAttendance['student_id'],
                    'branch_id' => $data['branch_id'],
                    'attendance_date' => $data['attendance_date'],
                    'result_root_id' => $data['result_root_id'] ?? null,
                ],
                [
                    'class_id' => $data['class_id'],
                    'status' => $studentAttendance['status'],
                    'marked_by' => auth()->user()->id,

                ]
            );
        }
        Notification::make()
            ->title('Attendance saved successfully')
            ->success()
            ->send();
    }
}
