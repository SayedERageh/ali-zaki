<?php

namespace App\Filament\Resources\HeroSlides\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HeroSlideForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('المحتوى العربي')
                    ->schema([
                        TextInput::make('title_ar')
                            ->label('العنوان')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('subtitle_ar')
                            ->label('العنوان الفرعي')
                            ->maxLength(255),

                        Textarea::make('description_ar')
                            ->label('الوصف')
                            ->rows(4),
                    ])
                    ->columns(1),

                Section::make('English Content')
                    ->schema([
                        TextInput::make('title_en')
                            ->label('Title')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('subtitle_en')
                            ->label('Subtitle')
                            ->maxLength(255),

                        Textarea::make('description_en')
                            ->label('Description')
                            ->rows(4),
                    ])
                    ->columns(1),

                Section::make('الصورة')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Hero Image')
                            ->image()
                            ->disk('public')
                            ->directory('hero-slides')
                            ->visibility('public')
                            ->imageEditor()
                            ->columnSpanFull(),
                    ]),

                Section::make('الزر الرئيسي')
                    ->schema([
                        TextInput::make('button_text_ar')
                            ->label('نص الزر بالعربي'),

                        TextInput::make('button_text_en')
                            ->label('Button Text'),

                        TextInput::make('button_url')
                            ->label('رابط الزر')
                            ->placeholder('/services'),
                    ])
                    ->columns(3),

                Section::make('الزر الثانوي')
                    ->schema([
                        TextInput::make('secondary_button_text_ar')
                            ->label('نص الزر بالعربي'),

                        TextInput::make('secondary_button_text_en')
                            ->label('Button Text'),

                        TextInput::make('secondary_button_url')
                            ->label('رابط الزر'),
                    ])
                    ->columns(3),

                Section::make('الإعدادات')
                    ->schema([
                        TextInput::make('sort_order')
                            ->label('الترتيب')
                            ->numeric()
                            ->default(0)
                            ->required(),

                        Toggle::make('is_active')
                            ->label('مفعل')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }
}