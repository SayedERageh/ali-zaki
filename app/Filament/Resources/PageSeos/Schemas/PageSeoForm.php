<?php

namespace App\Filament\Resources\PageSeos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;

class PageSeoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | Page
                |--------------------------------------------------------------------------
                */

                Section::make('إعدادات الصفحة')
                    ->schema([

                        Select::make('page_key')
                            ->label('الصفحة')
                            ->options([
                                'home' => 'الرئيسية',
                                'about' => 'من نحن',
                                'services' => 'الخدمات',
                                'projects' => 'المشروعات',
                                'contact' => 'تواصل معنا',
                            ])
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->searchable()
                            ->native(false),

                    ])
                    ->columns(1),


                /*
                |--------------------------------------------------------------------------
                | SEO
                |--------------------------------------------------------------------------
                */

                Tabs::make('SEO')
                    ->tabs([

                        /*
                        |--------------------------------------------------------------------------
                        | Arabic
                        |--------------------------------------------------------------------------
                        */

                        Tabs\Tab::make('العربية')
                            ->icon('heroicon-o-language')
                            ->schema([

                                TextInput::make('title_ar')
                                    ->label('عنوان الصفحة')
                                    ->placeholder('مثال: شركة تبـارك للسقالات والخدمات')
                                    ->maxLength(255)
                                    ->helperText('يفضل أن يكون من 50 إلى 60 حرفًا.')
                                    ->columnSpanFull(),

                                Textarea::make('description_ar')
                                    ->label('وصف الصفحة')
                                    ->placeholder('اكتب وصفًا مختصرًا وجذابًا للصفحة...')
                                    ->rows(4)
                                    ->maxLength(500)
                                    ->helperText('يفضل أن يكون من 120 إلى 160 حرفًا.')
                                    ->columnSpanFull(),

                                Textarea::make('keywords_ar')
                                    ->label('الكلمات المفتاحية')
                                    ->placeholder('سقالات, سقالات معدنية, تأجير سقالات')
                                    ->rows(3)
                                    ->helperText('افصل بين الكلمات بفاصلة.')
                                    ->columnSpanFull(),

                            ])
                            ->columns(1),


                        /*
                        |--------------------------------------------------------------------------
                        | English
                        |--------------------------------------------------------------------------
                        */

                        Tabs\Tab::make('English')
                            ->icon('heroicon-o-language')
                            ->schema([

                                TextInput::make('title_en')
                                    ->label('Page Title')
                                    ->placeholder('Example: Tabarak Scaffolding & Services')
                                    ->maxLength(255)
                                    ->helperText('Recommended: 50–60 characters.')
                                    ->columnSpanFull(),

                                Textarea::make('description_en')
                                    ->label('Meta Description')
                                    ->placeholder('Write a short and attractive description...')
                                    ->rows(4)
                                    ->maxLength(500)
                                    ->helperText('Recommended: 120–160 characters.')
                                    ->columnSpanFull(),

                                Textarea::make('keywords_en')
                                    ->label('Keywords')
                                    ->placeholder('scaffolding, scaffolding rental, construction services')
                                    ->rows(3)
                                    ->helperText('Separate keywords with commas.')
                                    ->columnSpanFull(),

                            ])
                            ->columns(1),

                    ])
                    ->columnSpanFull(),


                /*
                |--------------------------------------------------------------------------
                | Open Graph
                |--------------------------------------------------------------------------
                */

                Section::make('مشاركة السوشيال ميديا')
                    ->description('البيانات التي تظهر عند مشاركة الصفحة على Facebook و WhatsApp وغيرها.')
                    ->schema([

                        Tabs::make('Open Graph')
                            ->tabs([

                                Tabs\Tab::make('العربية')
                                    ->schema([

                                        TextInput::make('og_title_ar')
                                            ->label('عنوان المشاركة')
                                            ->maxLength(255)
                                            ->columnSpanFull(),

                                        Textarea::make('og_description_ar')
                                            ->label('وصف المشاركة')
                                            ->rows(4)
                                            ->maxLength(500)
                                            ->columnSpanFull(),

                                    ]),

                                Tabs\Tab::make('English')
                                    ->schema([

                                        TextInput::make('og_title_en')
                                            ->label('Social Title')
                                            ->maxLength(255)
                                            ->columnSpanFull(),

                                        Textarea::make('og_description_en')
                                            ->label('Social Description')
                                            ->rows(4)
                                            ->maxLength(500)
                                            ->columnSpanFull(),

                                    ]),

                            ])
                            ->columnSpanFull(),

                        FileUpload::make('og_image')
                            ->label('صورة المشاركة')
                            ->image()
                            ->disk('public')
                            ->directory('seo')
                            ->imageEditor()
                            ->imagePreviewHeight('200')
                            ->maxSize(5120)
                            ->helperText('يفضل استخدام صورة 1200×630 بكسل.')
                            ->columnSpanFull(),

                    ])
                    ->columns(1),


                /*
                |--------------------------------------------------------------------------
                | Search Engine Settings
                |--------------------------------------------------------------------------
                */

                Section::make('إعدادات محركات البحث')
                    ->schema([

                        Toggle::make('index')
                            ->label('السماح بأرشفة الصفحة')
                            ->default(true)
                            ->inline(false)
                            ->helperText('عند التفعيل يمكن لمحركات البحث أرشفة الصفحة.'),

                        Toggle::make('follow')
                            ->label('السماح بتتبع الروابط')
                            ->default(true)
                            ->inline(false)
                            ->helperText('عند التفعيل يمكن لمحركات البحث تتبع الروابط الموجودة في الصفحة.'),

                        TextInput::make('canonical_url')
                            ->label('Canonical URL')
                            ->url()
                            ->placeholder('https://example.com/about')
                            ->maxLength(500)
                            ->columnSpanFull(),

                    ])
                    ->columns(2),

            ]);
    }
}