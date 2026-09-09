<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('المحتوى العربي')
                    ->schema([
                        TextInput::make('title_ar')
                            ->label('اسم الخدمة')
                            ->required(),

                        Textarea::make('short_description_ar')
                            ->label('الوصف المختصر')
                            ->rows(3),

                        RichEditor::make('description_ar')
                            ->label('التفاصيل')
                            ->columnSpanFull(),
                    ]),

                Section::make('English Content')
                    ->schema([
                        TextInput::make('title_en')
                            ->label('Service Name')
                            ->required(),

                        Textarea::make('short_description_en')
                            ->label('Short Description')
                            ->rows(3),

                        RichEditor::make('description_en')
                            ->label('Description')
                            ->columnSpanFull(),
                    ]),

                Section::make('إعدادات الخدمة')
                    ->schema([
                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->helperText('مثال: scaffolding-services'),

                        TextInput::make('icon')
                            ->label('Bootstrap Icon')
                            ->placeholder('bi bi-building'),

                        FileUpload::make('image')
                            ->label('صورة الخدمة')
                            ->image()
                            ->disk('public')
                            ->directory('services')
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