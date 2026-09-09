<?php

namespace App\Filament\Resources\HomeSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HomeSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | Section Information
                |--------------------------------------------------------------------------
                */

                Section::make('بيانات القسم')
                    ->description('الإعدادات الأساسية للقسم في الصفحة الرئيسية')
                    ->schema([

                        Select::make('key')
                            ->label('القسم')
                            ->options([
                                'about' => 'من نحن',
                                'services' => 'الخدمات',
                                'values' => 'القيم الأساسية',
                                'projects' => 'المشروعات',
                                'commitment' => 'التزامنا',
                                'cta' => 'دعوة للتواصل',
                            ])
                            ->searchable()
                            ->native(false)
                            ->required(),

                        Toggle::make('is_active')
                            ->label('القسم مفعل')
                            ->default(true)
                            ->inline(false),

                    ])
                    ->columns(2),

                /*
                |--------------------------------------------------------------------------
                | Arabic Content
                |--------------------------------------------------------------------------
                */

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
                            ->rows(6)
                            ->columnSpanFull(),

                        TextInput::make('button_text_ar')
                            ->label('نص الزر')
                            ->maxLength(255),

                    ])
                    ->columns(2),

                /*
                |--------------------------------------------------------------------------
                | English Content
                |--------------------------------------------------------------------------
                */

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
                            ->rows(6)
                            ->columnSpanFull(),

                        TextInput::make('button_text_en')
                            ->label('Button Text')
                            ->maxLength(255),

                    ])
                    ->columns(2),

                /*
                |--------------------------------------------------------------------------
                | Button & Image
                |--------------------------------------------------------------------------
                */

                Section::make('الزر والصورة')
                    ->schema([

                        TextInput::make('button_url')
                            ->label('رابط الزر')
                            ->placeholder('/contact أو https://example.com')
                            ->maxLength(500),

                        FileUpload::make('image')
                            ->label('صورة القسم')
                            ->image()
                            ->imageEditor()
                            ->directory('home-sections')
                            ->disk('public')
                            ->visibility('public')
                            ->maxSize(5120)
                            ->columnSpanFull(),

                    ])
                    ->columns(1),

            ]);
    }
}

