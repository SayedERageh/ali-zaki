<?php

namespace App\Filament\Resources\CoreValues\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CoreValueForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('العربي')
                    ->schema([
                        TextInput::make('title_ar')
                            ->label('اسم القيمة')
                            ->required(),

                        Textarea::make('description_ar')
                            ->label('الوصف')
                            ->rows(4),
                    ]),

                Section::make('English')
                    ->schema([
                        TextInput::make('title_en')
                            ->label('Value Name')
                            ->required(),

                        Textarea::make('description_en')
                            ->label('Description')
                            ->rows(4),
                    ]),

                Section::make('الإعدادات')
                    ->schema([
                 Select::make('icon')
    ->label('الأيقونة')
    ->options([
        'bi bi-shield-check' => '🛡️ السلامة',
        'bi bi-award' => '🏆 الجودة',
        'bi bi-hand-thumbs-up' => '👍 النزاهة',
        'bi bi-check2-circle' => '✅ الاعتمادية',
        'bi bi-people' => '👥 فريق العمل',
        'bi bi-graph-up-arrow' => '📈 التميز التشغيلي',

        'bi bi-building' => '🏢 المباني',
        'bi bi-building-gear' => '🏗️ الإنشاءات',
        'bi bi-tools' => '🛠️ المعدات',
        'bi bi-wrench-adjustable' => '🔧 الصيانة',
        'bi bi-gear' => '⚙️ الهندسة',
        'bi bi-lightning-charge' => '⚡ الطاقة',
        'bi bi-lightbulb' => '💡 الابتكار',
        'bi bi-diagram-3' => '🔗 التعاون',

        'bi bi-person-check' => '👤 الخبرة',
        'bi bi-person-workspace' => '👷 فريق العمل',
        'bi bi-clock-history' => '⏱️ الالتزام بالمواعيد',
        'bi bi-speedometer2' => '🚀 الكفاءة',
        'bi bi-bar-chart-line' => '📊 الأداء',

        'bi bi-heart' => '❤️ الاهتمام',
        'bi bi-star' => '⭐ التميز',
        'bi bi-trophy' => '🏆 النجاح',
        'bi bi-patch-check' => '✔️ الاعتماد',
        'bi bi-shield-fill-check' => '🛡️ الحماية',

        'bi bi-globe2' => '🌐 العالمية',
        'bi bi-briefcase' => '💼 الأعمال',
        'bi bi-clipboard-check' => '📋 الالتزام',
        'bi bi-file-earmark-check' => '📄 الجودة',
    ])
    ->searchable()
    ->native(false)
    ->required()
    ->default('bi bi-shield-check'),
                        TextInput::make('sort_order')
                            ->label('الترتيب')
                            ->numeric()
                            ->default(0)
                            ->required(),

                        Toggle::make('is_active')
                            ->label('مفعل')
                            ->default(true),
                    ])
                    ->columns(3),
            ]);
    }
}