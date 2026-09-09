<?php

namespace App\Filament\Resources\HeroSlides;

use App\Filament\Resources\HeroSlides\Pages\CreateHeroSlide;
use App\Filament\Resources\HeroSlides\Pages\EditHeroSlide;
use App\Filament\Resources\HeroSlides\Pages\ListHeroSlides;
use App\Filament\Resources\HeroSlides\Schemas\HeroSlideForm;
use App\Filament\Resources\HeroSlides\Tables\HeroSlidesTable;
use App\Models\HeroSlide;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HeroSlideResource extends Resource
{
    protected static ?string $model = HeroSlide::class;

// اسم العنصر في السيد بار
protected static ?string $navigationLabel = 'السلايدر الرئيسي';

// اسم المجموعة
protected static string|\UnitEnum|null $navigationGroup = 'إدارة الموقع';

// ترتيب العنصر
protected static ?int $navigationSort = 1;

// أيقونة السيد بار
protected static string|BackedEnum|null $navigationIcon =
    Heroicon::OutlinedPhoto;

// اسم الموديل
protected static ?string $modelLabel = 'سلايدر';

// اسم الجمع
protected static ?string $pluralModelLabel = 'السلايدر الرئيسي';
    public static function form(Schema $schema): Schema
    {
        return HeroSlideForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HeroSlidesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListHeroSlides::route('/'),
            'create' => CreateHeroSlide::route('/create'),
            'edit' => EditHeroSlide::route('/{record}/edit'),
        ];
    }
}
