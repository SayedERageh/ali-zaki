<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | معلومات الموقع
                |--------------------------------------------------------------------------
                */

                Section::make('معلومات الموقع')
                    ->description('الإعدادات الأساسية للموقع')
                    ->schema([

                        TextInput::make('site_name')
                            ->label('اسم الموقع')
                            ->required()
                            ->maxLength(255),

                        Textarea::make('site_description')
                            ->label('وصف الموقع')
                            ->rows(4)
                            ->columnSpanFull(),

                        FileUpload::make('logo')
                            ->label('شعار الموقع')
                            ->image()
                            ->disk('public')
                            ->directory('site')
                            ->imageEditor()
                            ->imagePreviewHeight('150'),

                        FileUpload::make('favicon')
                            ->label('Favicon')
                            ->image()
                            ->disk('public')
                            ->directory('site')
                            ->imageEditor()
                            ->imagePreviewHeight('100')
                            ->helperText('يفضل أن تكون 512×512 بكسل.'),

                    ])
                    ->columns(2),


                /*
                |--------------------------------------------------------------------------
                | الألوان الأساسية
                |--------------------------------------------------------------------------
                */

                Section::make('الألوان الأساسية')
                    ->description('تحكم في ألوان الموقع بالكامل من هنا.')
                    ->schema([

                        ColorPicker::make('primary_color')
                            ->label('اللون الأساسي')
                            ->default('#55bce8')
                            ->hex(),

                        ColorPicker::make('primary_dark_color')
                            ->label('اللون الأساسي الغامق')
                            ->default('#168dcc')
                            ->hex(),

                        ColorPicker::make('secondary_color')
                            ->label('اللون الثانوي')
                            ->default('#061a2b')
                            ->hex(),

                        ColorPicker::make('secondary_dark_color')
                            ->label('اللون الثانوي الغامق')
                            ->default('#0b2b43')
                            ->hex(),

                    ])
                    ->columns(2),


                /*
                |--------------------------------------------------------------------------
                | ألوان الخلفيات
                |--------------------------------------------------------------------------
                */

                Section::make('ألوان الخلفيات')
                    ->schema([

                        ColorPicker::make('light_blue_color')
                            ->label('الأزرق الفاتح')
                            ->default('#dff4fc')
                            ->hex(),

                        ColorPicker::make('light_color')
                            ->label('لون الخلفية الفاتح')
                            ->default('#f5f8fa')
                            ->hex(),

                        ColorPicker::make('white_color')
                            ->label('الأبيض')
                            ->default('#ffffff')
                            ->hex(),

                    ])
                    ->columns(3),


                /*
                |--------------------------------------------------------------------------
                | ألوان النصوص
                |--------------------------------------------------------------------------
                */

                Section::make('ألوان النصوص')
                    ->schema([

                        ColorPicker::make('text_color')
                            ->label('لون النص الأساسي')
                            ->default('#182b3a')
                            ->hex(),

                        ColorPicker::make('muted_color')
                            ->label('لون النص الثانوي')
                            ->default('#71808d')
                            ->hex(),

                        ColorPicker::make('border_color')
                            ->label('لون الحدود')
                            ->default('#dfe7ec')
                            ->hex(),

                    ])
                    ->columns(3),

            ]);
    }
}