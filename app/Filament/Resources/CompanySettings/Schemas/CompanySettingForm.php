<?php

namespace App\Filament\Resources\CompanySettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class CompanySettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Tabs::make('Company Settings')
                    ->tabs([

                        /*
                        |--------------------------------------------------------------------------
                        | Company Information
                        |--------------------------------------------------------------------------
                        */

                        Tab::make('Company Information')
                            ->icon('heroicon-o-building-office')
                            ->schema([

                                Section::make('Basic Information')
                                    ->description('Basic company information and branding.')
                                    ->schema([

                                        TextInput::make('company_name_en')
                                            ->label('Company Name - English')
                                            ->placeholder('Tabarak Scaffold Services')
                                            ->required()
                                            ->maxLength(255),

                                        TextInput::make('company_name_ar')
                                            ->label('اسم الشركة - عربي')
                                            ->placeholder('تبرك لخدمات السقالات')
                                            ->required()
                                            ->maxLength(255),

                                        FileUpload::make('logo')
                                            ->label('Company Logo')
                                            ->image()
                                            ->directory('company')
                                            ->disk('public')
                                            ->imageEditor()
                                            ->imagePreviewHeight('180')
                                            ->openable()
                                            ->downloadable()
                                            ->columnSpanFull(),

                                    ])
                                    ->columns(2),

                            ]),

                        /*
                        |--------------------------------------------------------------------------
                        | Contact Information
                        |--------------------------------------------------------------------------
                        */

                        Tab::make('Contact')
                            ->icon('heroicon-o-phone')
                            ->schema([

                                Section::make('Contact Information')
                                    ->description('Company contact information.')
                                    ->schema([

                                        TextInput::make('email')
                                            ->label('Email')
                                            ->placeholder('info@example.com')
                                            ->email()
                                            ->maxLength(255),

                                        TextInput::make('phone')
                                            ->label('Phone')
                                            ->placeholder('+20 XXX XXX XXXX')
                                          ,

                                        TextInput::make('whatsapp')
                                            ->label('WhatsApp')
                                            ->placeholder('+20 XXX XXX XXXX')
                                           ,

                                    ])
                                    ->columns(3),

                            ]),

                        /*
                        |--------------------------------------------------------------------------
                        | About Us
                        |--------------------------------------------------------------------------
                        */

                        Tab::make('About Us')
                            ->icon('heroicon-o-information-circle')
                            ->schema([

                                Section::make('About Us Content')
                                    ->description('Write the company introduction in both languages.')
                                    ->schema([

                                        RichEditor::make('about_en')
                                            ->label('About Us - English')
                                            ->placeholder('Write your company introduction...')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'underline',
                                                'strike',
                                                'h2',
                                                'h3',
                                                'bulletList',
                                                'orderedList',
                                                'blockquote',
                                                'link',
                                                'undo',
                                                'redo',
                                            ])
                                            ->extraInputAttributes([
                                                'style' => 'min-height: 350px; font-size: 18px; line-height: 1.8;',
                                            ])
                                            ->columnSpan(1),

                                        RichEditor::make('about_ar')
                                            ->label('من نحن - عربي')
                                            ->placeholder('اكتب نبذة عن الشركة...')
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                                'style' => 'min-height: 350px; font-size: 18px; line-height: 2;',
                                            ])
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'underline',
                                                'strike',
                                                'h2',
                                                'h3',
                                                'bulletList',
                                                'orderedList',
                                                'blockquote',
                                                'link',
                                                'undo',
                                                'redo',
                                            ])
                                            ->columnSpan(1),

                                    ])
                                    ->columns(2),

                            ]),

                        /*
                        |--------------------------------------------------------------------------
                        | Vision
                        |--------------------------------------------------------------------------
                        */

                        Tab::make('Vision')
                            ->icon('heroicon-o-eye')
                            ->schema([

                                Section::make('Company Vision')
                                    ->description('Define your company vision in both languages.')
                                    ->schema([

                                        RichEditor::make('vision_en')
                                            ->label('Vision - English')
                                            ->placeholder('Write your company vision...')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'underline',
                                                'h2',
                                                'h3',
                                                'bulletList',
                                                'orderedList',
                                                'blockquote',
                                                'link',
                                                'undo',
                                                'redo',
                                            ])
                                            ->extraInputAttributes([
                                                'style' => 'min-height: 300px; font-size: 18px; line-height: 1.8;',
                                            ])
                                            ->columnSpan(1),

                                        RichEditor::make('vision_ar')
                                            ->label('الرؤية - عربي')
                                            ->placeholder('اكتب رؤية الشركة...')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'underline',
                                                'h2',
                                                'h3',
                                                'bulletList',
                                                'orderedList',
                                                'blockquote',
                                                'link',
                                                'undo',
                                                'redo',
                                            ])
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                                'style' => 'min-height: 300px; font-size: 18px; line-height: 2;',
                                            ])
                                            ->columnSpan(1),

                                    ])
                                    ->columns(2),

                            ]),

                        /*
                        |--------------------------------------------------------------------------
                        | Mission
                        |--------------------------------------------------------------------------
                        */

                        Tab::make('Mission')
                            ->icon('heroicon-o-flag')
                            ->schema([

                                Section::make('Company Mission')
                                    ->description('Define your company mission in both languages.')
                                    ->schema([

                                        RichEditor::make('mission_en')
                                            ->label('Mission - English')
                                            ->placeholder('Write your company mission...')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'underline',
                                                'h2',
                                                'h3',
                                                'bulletList',
                                                'orderedList',
                                                'blockquote',
                                                'link',
                                                'undo',
                                                'redo',
                                            ])
                                            ->extraInputAttributes([
                                                'style' => 'min-height: 300px; font-size: 18px; line-height: 1.8;',
                                            ])
                                            ->columnSpan(1),

                                        RichEditor::make('mission_ar')
                                            ->label('الرسالة - عربي')
                                            ->placeholder('اكتب رسالة الشركة...')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'underline',
                                                'h2',
                                                'h3',
                                                'bulletList',
                                                'orderedList',
                                                'blockquote',
                                                'link',
                                                'undo',
                                                'redo',
                                            ])
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                                'style' => 'min-height: 300px; font-size: 18px; line-height: 2;',
                                            ])
                                            ->columnSpan(1),

                                    ])
                                    ->columns(2),

                            ]),

                        /*
                        |--------------------------------------------------------------------------
                        | Commitment
                        |--------------------------------------------------------------------------
                        */

                        Tab::make('Commitment')
                            ->icon('heroicon-o-shield-check')
                            ->schema([

                                Section::make('Our Commitment')
                                    ->description('Write your company commitment and professional statement.')
                                    ->schema([

                                        RichEditor::make('commitment_en')
                                            ->label('Our Commitment - English')
                                            ->placeholder('Write your commitment...')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'underline',
                                                'strike',
                                                'h2',
                                                'h3',
                                                'bulletList',
                                                'orderedList',
                                                'blockquote',
                                                'link',
                                                'undo',
                                                'redo',
                                            ])
                                            ->extraInputAttributes([
                                                'style' => 'min-height: 400px; font-size: 18px; line-height: 1.8;',
                                            ])
                                            ->columnSpan(1),

                                        RichEditor::make('commitment_ar')
                                            ->label('التزامنا - عربي')
                                            ->placeholder('اكتب التزام الشركة...')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'underline',
                                                'strike',
                                                'h2',
                                                'h3',
                                                'bulletList',
                                                'orderedList',
                                                'blockquote',
                                                'link',
                                                'undo',
                                                'redo',
                                            ])
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                                'style' => 'min-height: 400px; font-size: 18px; line-height: 2;',
                                            ])
                                            ->columnSpan(1),

                                    ])
                                    ->columns(2),

                            ]),

                        /*
                        |--------------------------------------------------------------------------
                        | Address
                        |--------------------------------------------------------------------------
                        */

                        Tab::make('Address')
                            ->icon('heroicon-o-map-pin')
                            ->schema([

                                Section::make('Company Address')
                                    ->description('Add the company address in both languages.')
                                    ->schema([

                                        RichEditor::make('address_en')
                                            ->label('Address - English')
                                            ->placeholder('Write company address...')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'bulletList',
                                                'link',
                                                'undo',
                                                'redo',
                                            ])
                                            ->extraInputAttributes([
                                                'style' => 'min-height: 200px; font-size: 18px; line-height: 1.8;',
                                            ])
                                            ->columnSpan(1),

                                        RichEditor::make('address_ar')
                                            ->label('العنوان - عربي')
                                            ->placeholder('اكتب عنوان الشركة...')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'bulletList',
                                                'link',
                                                'undo',
                                                'redo',
                                            ])
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                                'style' => 'min-height: 200px; font-size: 18px; line-height: 2;',
                                            ])
                                            ->columnSpan(1),

                                    ])
                                    ->columns(2),

                            ]),

                    ])
                    ->columnSpanFull(),

            ]);
    }
}