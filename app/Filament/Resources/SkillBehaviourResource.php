<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ResultRoot;
use App\Models\SchoolClass;
use App\Models\SkillBehaviour;
use App\Filament\Resources\SkillBehaviourResource\Pages;

class SkillBehaviourResource extends \Filament\Resources\Resource
{
    protected static ?string $model = SkillBehaviour::class;
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document';
    protected static ?string $navigationGroup = 'Academics';

    public static function form(Form $form): Form
    {
        return $form->schema([
            // CREATE: choose result root & class + upload file
            Forms\Components\Select::make('result_root_id')
                ->options(ResultRoot::query()->pluck('name', 'id'))
                ->required()
                ->searchable()
                ->preload()
                ->hiddenOn('edit'),

            Forms\Components\Select::make('class_id')
                ->options(SchoolClass::query()->pluck('name', 'id'))
                ->required()
                ->searchable()
                ->preload()
                ->hiddenOn('edit'),

            Forms\Components\FileUpload::make('file')
                ->label('Upload CSV File')
                ->acceptedFileTypes(['text/csv', 'text/plain'])
                ->storeFiles(false)
                ->required()
                ->columnSpanFull()
                ->hiddenOn('edit'),

            // EDIT: inline edit scores (students → their categories/scores)
            Forms\Components\Repeater::make('students')
                ->relationship('students')
                ->schema([
                    Forms\Components\Select::make('student_id')
                        ->relationship('student', 'name')
                        ->disabled()
                        ->dehydrated(false)
                        ->label('Student'),

                    Forms\Components\Repeater::make('scores')
                        ->relationship('scores')
                        ->schema([
                            Forms\Components\Select::make('category_id')
                                ->relationship('category', 'name')
                                ->disabled()
                                ->dehydrated(false)
                                ->label('Category'),

                            Forms\Components\TextInput::make('score')
                                ->numeric()
                                ->minValue(1)->maxValue(5)
                                ->required()
                                ->label('Score'),
                        ])
                        ->columns(2)
                        ->columnSpanFull()
                        ->orderable(false),
                ])
                ->columns(1)
                ->columnSpanFull()
                ->hiddenOn('create'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('resultRoot.name')->label('Result Root')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('schoolClass.name')->label('Class')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('students_count')->counts('students')->label('Students'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->label('Uploaded At')->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListSkillBehaviours::route('/'),
            'create' => Pages\CreateSkillBehaviour::route('/create'),
            'edit'   => Pages\EditSkillBehaviour::route('/{record}/edit'),
        ];
    }
}
