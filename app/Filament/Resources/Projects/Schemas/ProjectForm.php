<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('العربي')
                    ->schema([
                        TextInput::make('title_ar')
                            ->label('اسم المشروع')
                            ->required(),

                        TextInput::make('category_ar')
                            ->label('التصنيف'),

                        TextInput::make('location_ar')
                            ->label('الموقع'),

                        RichEditor::make('description_ar')
                            ->label('وصف المشروع')
                            ->columnSpanFull(),
                    ]),

                Section::make('English')
                    ->schema([
                        TextInput::make('title_en')
                            ->label('Project Name')
                            ->required(),

                        TextInput::make('category_en')
                            ->label('Category'),

                        TextInput::make('location_en')
                            ->label('Location'),

                        RichEditor::make('description_en')
                            ->label('Project Description')
                            ->columnSpanFull(),
                    ]),

                Section::make('إعدادات المشروع')
                    ->schema([
                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->unique(ignoreRecord: true),

                        FileUpload::make('image')
                            ->label('صورة المشروع')
                            ->image()
                            ->disk('public')
                            ->directory('projects')
                            ->visibility('public')
                            ->imageEditor(),

                        TextInput::make('sort_order')
                            ->label('الترتيب')
                            ->numeric()
                            ->default(0),

                        Toggle::make('is_active')
                            ->label('مفعل')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }
}